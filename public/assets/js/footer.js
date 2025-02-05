window.onload = function() {
    const images = document.querySelectorAll(".product-image");
    let isAtBottom = false;
    let animationTriggered = false;

    
    function checkIfAtBottom() {
        const scrollPosition = window.innerHeight + window.scrollY;
        const documentHeight = document.documentElement.scrollHeight;

        isAtBottom = scrollPosition >= documentHeight - 10;

        if (isAtBottom && !animationTriggered) {
            animationTriggered = true; 
            throwAndDropProducts();
        }
    }

    function resetAnimationFlag() {
        if (window.scrollY < document.documentElement.scrollHeight - window.innerHeight - 10) {
            animationTriggered = false;
        }
    }

    window.addEventListener("scroll", () => {
        checkIfAtBottom();
        resetAnimationFlag();
    });

    window.addEventListener("resize", () => {
        checkIfAtBottom();
    });

    function throwAndDropProducts() {
        images.forEach((image) => {
            const randomX = (Math.random() - 0.5) * 200;
            const randomY = (Math.random() * -200) - 150;
            const randomRotate = (Math.random() - 0.5) * 90;

            image.style.transition = `all 0.8s ease-out`;
            image.style.opacity = 1;
            image.style.transform = `translate(${randomX}px, ${randomY}px) rotate(${randomRotate}deg)`;

            setTimeout(() => {
                const rotateUp = 90;
                const finalX = (Math.random() - 0.5) * 300;
                const finalY = (Math.random() * 200) + 150;
                const finalRotate = (Math.random() - 0.5) * 65;

                image.style.transition = `transform 2.5s cubic-bezier(0.25, 0.8, 0.25, 1), opacity 2.5s ease-out`;
                image.style.transform = `translate(${finalX}px, ${finalY}px) rotate(${rotateUp}deg)`;

                setTimeout(() => {
                    image.style.transition = `transform 1.5s ease-in-out, opacity 1.5s ease-out`;
                    image.style.transform = `translate(${finalX}px, ${finalY}px) rotate(${finalRotate}deg)`;
                    image.style.opacity = 0.8;
                }, 5000);
            }, 800);
        });
    }

    checkIfAtBottom();
};