anime({
  targets: '.square', // Cílí na všechny čtverce
  translateY: anime.stagger(['2.75rem', '-2.75rem'], { ease: 'easeInOutQuad' }), 
  delay: anime.stagger(100, { ease: 'easeInOutQuad' }),
  loop: true,
  direction: "alternate"
});
