document.addEventListener("DOMContentLoaded", function() {
    const slider = document.getElementById("slider");
    const scrollContainer = document.getElementById("product-container");
    const sliderTrack = document.getElementById("slider-track");

    let isDragging = false;
    let startX, startLeft;
    let animationFrame;

    scrollContainer.style.scrollBehavior = "smooth";

    scrollContainer.addEventListener("scroll", () => {
        if (scrollContainer.scrollLeft > 10) {
            scrollContainer.classList.remove("pl-10");
        } else {
            scrollContainer.classList.add("pl-10");
        }

        updateSliderPosition();
    });

    function updateSliderPosition() {
        let maxSliderMove = sliderTrack.clientWidth - slider.clientWidth;
        let maxScroll = scrollContainer.scrollWidth - scrollContainer.clientWidth;

        let scrollRatio = scrollContainer.scrollLeft / maxScroll;
        let sliderPosition = scrollRatio * maxSliderMove;

        slider.style.transform = `translateX(${sliderPosition}px)`;
    }

    function updateScroll(x) {
        let maxSliderMove = sliderTrack.clientWidth - slider.clientWidth;
        let maxScroll = scrollContainer.scrollWidth - scrollContainer.clientWidth;

        x = Math.max(0, Math.min(maxSliderMove, x));

        cancelAnimationFrame(animationFrame);
        animationFrame = requestAnimationFrame(() => {
            slider.style.transform = `translateX(${x}px)`;
            scrollContainer.scrollLeft = (x / maxSliderMove) * maxScroll;
        });
    }

    slider.addEventListener("mousedown", (e) => {
        isDragging = true;
        startX = e.clientX - slider.offsetLeft;
        startLeft = slider.offsetLeft;
        slider.style.cursor = "grabbing";
    });

    document.addEventListener("mousemove", (e) => {
        if (!isDragging) return;
        let x = e.clientX - startX;
        updateScroll(x);
    });

    document.addEventListener("mouseup", () => {
        isDragging = false;
        slider.style.cursor = "grab";
    });
});