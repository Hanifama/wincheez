const scrollContainer = document.getElementById("scroll-container");
const prevButton = document.getElementById("prev");
const nextButton = document.getElementById("next");

const scrollAmount = 280;

nextButton.addEventListener("click", () => {
    scrollContainer.scrollBy({
        left: scrollAmount,
        behavior: "smooth"
    });
});

prevButton.addEventListener("click", () => {
    scrollContainer.scrollBy({
        left: -scrollAmount,
        behavior: "smooth"
    });
});