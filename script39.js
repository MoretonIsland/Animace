gsap.registerPlugin(SplitText);

document.fonts.ready.then(() => {
  var quote = document.getElementById("quote"),
    decoy = document.getElementById("decoys"),
    quoteSplit = SplitText.create(quote, { type: "words" }),
    decoySplit = SplitText.create(decoy, { type: "words" }),
    tl = gsap.timeline({ delay: 0.5, repeat: 50, repeatDelay: 1 }),
    allWords = quoteSplit.words.concat(decoySplit.words),
    i;

  gsap.set([quote, decoy], { visibility: "visible" });
  gsap.set(allWords, { boxShadow: "(0px 0px 6px rgba(0, 0, 0, 0.8)" });

  //intro
  for (i = 0; i < allWords.length; i++) {
    tl.fromTo(
      allWords[i],
      0.4 + Math.random() * 0.5,
      {
        x: randomInteger(-400, 400),
        y: randomInteger(-300, 300),
        autoAlpha: 0
      },
      {
        force3D: true,
        rotation: randomInteger(-60, 60),
        y: randomInteger(60, 200),
        x: randomInteger(-350, 350),
        autoAlpha: 1,
        ease: Power2.easeOut
      },
      Math.random() * 0.5
    );
  }

  //show sentence
  for (i = 0; i < quoteSplit.words.length; i++) {
    tl.to(
      quoteSplit.words[i],
      {
        duration: 0.5,
        rotation: randomInteger(-6, 10),
        x: randomInteger(-2, 2),
        y: randomInteger(-4, 4)
      },
      "sentence+=" + i * 0.3
    );
  }

  //outro
  tl.to(
    allWords,
    { duration: 0.3, autoAlpha: 0, scale: 0, ease: "back.in", stagger: 0.01 },
    "+=1"
  );

  function randomInteger(min, max) {
    return Math.floor(Math.random() * (1 + max - min) + min);
  }
  
});
