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

        let transformString = "";

        if (direction === 'left') {
            transformString = `translateX(${-offset}px)`;
        } else if (direction === 'right') {
            transformString = `translateX(${offset}px)`;
        } else if (direction === 'bottom') {
            transformString = `translateY(${offset}px)`;
        }

        if (el.getAttribute('id') === 'flipped') {
            transformString += " scale(-1, 1)";
        }

        el.style.transform = transformString;
    });
};

window.addEventListener('load', () => {
    updateHeroElements();
});

window.addEventListener('scroll', () => {
    window.requestAnimationFrame(updateHeroElements);
});