const OFFSET_MAX = 20;         
const vanishThreshold = 50;    
const vanishMax = 1000;         

const updateHeroElements = () => {
const scrollY = window.scrollY;
  document.querySelectorAll('.hero-element[data-direction]').forEach(el => {
    const direction = el.getAttribute('data-direction');
    let offset;

    if (scrollY < vanishThreshold) {
      const progress = scrollY / vanishThreshold;
      offset = progress * OFFSET_MAX;
    } else {
      const extraProgress = Math.min((scrollY - vanishThreshold) / (vanishMax - vanishThreshold), 1);
      offset = OFFSET_MAX + extraProgress * (window.innerWidth - OFFSET_MAX);
    }


    const scaleTransform =  "";

    if (direction === 'left' && el.getAttribute('id') !== 'flipped') {
      el.style.transform = `translateX(${-offset}px)`;
    } else if (direction === 'left' && el.getAttribute('id') === 'flipped') {
      el.style.transform = `translateX(${-offset}px) scale(-1, 1)`;
    }
    else if (direction === 'right') {
      el.style.transform = `translateX(${offset}px)`;
    } else if (direction == 'bottom') {
      el.style.transform = `translateY(${offset}px)`;
    }
  });
};

window.addEventListener('load', () => {
    setTimeout(() => {
    document.querySelectorAll('.hero-element[data-direction]').forEach(el => {
    if (el.getAttribute('id') === 'flipped') {
        el.style.transform = 'translateX(0) scale(-1, 1)';
    } else {
        el.style.transform = 'translateX(0)';
    }
    });
    }, 100);
});

window.addEventListener('scroll', () => {
    window.requestAnimationFrame(updateHeroElements);
});
