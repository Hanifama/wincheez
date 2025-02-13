document.addEventListener('DOMContentLoaded', () => {
    const parallaxElements = Array.from(document.querySelectorAll('img.parallax[data-direction]')).map(el => ({
      el: el,
      container: el.closest('section') || el.parentElement,
      currentDistance: null
    }));

    function smoothStep(x) {
      return x * x * (3 - 2 * x);
    }

    function lerp(a, b, t) {
      return a + (b - a) * t;
    }

    function updateParallaxElements() {
      const windowHeight = window.innerHeight;
      parallaxElements.forEach(item => {
        const { el, container } = item;
        if (!container) return;

        const rect = container.getBoundingClientRect();
        const totalDistance = windowHeight + rect.height;
        let progress = (windowHeight - rect.top) / totalDistance;
        progress = Math.min(Math.max(progress, 0), 1);

        let rawFactor = Math.abs(progress - 0.5);
        let smoothFactor = smoothStep(rawFactor);
        let targetDistance = smoothFactor * 50;

        if (item.currentDistance === null) {
          item.currentDistance = targetDistance;
        } else {
          const interpolationAmount = 0.3;
          item.currentDistance = lerp(item.currentDistance, targetDistance, interpolationAmount);
        }

        const direction = el.getAttribute('data-direction');
        let transform = "";
        if (direction === "right") {
          transform = `translateX(${item.currentDistance}vw)`;
        } else if (direction === "left") {
          transform = `translateX(-${item.currentDistance}vw)`;
        }
        el.style.transform = transform;
      });
    }

    function animate() {
      updateParallaxElements();
      requestAnimationFrame(animate);
    }

    animate();

    window.addEventListener('resize', updateParallaxElements);
  });