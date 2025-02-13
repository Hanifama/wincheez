const planets = document.querySelectorAll('.orbit');
let angle = 0;

function rotatePlanets() {
    planets.forEach((planet, index) => {
        let currentAngle = parseFloat(planet.getAttribute('data-angle'));
        let newAngle = currentAngle + 0.8; 

        let radian = newAngle * (Math.PI / 180);

        let orbitRadius = 140;
        let x = Math.cos(radian) * orbitRadius;
        let y = Math.sin(radian) * orbitRadius;
        
        let opacity = x > 0 ? 1 : 0; 
        
        planet.style.transform = `translate(${x}px, ${y}px)`;
        planet.style.opacity = opacity;
        
        planet.setAttribute('data-angle', newAngle);
    });

    requestAnimationFrame(rotatePlanets);
}

// Jalankan animasi
rotatePlanets();
