const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('dropdown-menu');
    const closeMenu = document.getElementById('close-menu');
    const navbarFirst = document.querySelector('.navbar-first');
    const navbarSecond = document.querySelector('.navbar-second');
    const scrollThreshold = 100;

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        setTimeout(() => {
            mobileMenu.classList.toggle('-translate-y-full');
        }, 10);
    });

    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.add('-translate-y-full');
        setTimeout(() => {
            mobileMenu.classList.add('hidden');
        }, 300);
    });

    function handleScroll() {
        if (window.innerWidth >= 768) {
            if (window.scrollY > scrollThreshold) {
                navbarFirst.style.display = 'none';
                navbarSecond.style.display = 'flex';
            } else {
                navbarFirst.style.display = 'flex';
                navbarSecond.style.display = 'none';
            }
        } else {
            navbarFirst.style.display = 'flex';
            navbarSecond.style.display = 'none';
        }
    }

    window.addEventListener('scroll', handleScroll);
    window.addEventListener('resize', handleScroll);
    handleScroll();