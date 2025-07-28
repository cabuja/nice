document.addEventListener('DOMContentLoaded', function() {
    // Control del nav al hacer scroll
    const nav = document.querySelector('nav');
    let lastScroll = 0;
    
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
        
        lastScroll = currentScroll;
    });

    // Menú móvil
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeMenu = document.querySelector('.close-menu');
    const mobileLinks = document.querySelectorAll('.mobile-menu a');

    function toggleMenu() {
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    }

    if (menuToggle && mobileMenu && closeMenu) {
        menuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            toggleMenu();
        });

        closeMenu.addEventListener('click', function(e) {
            e.preventDefault();
            toggleMenu();
        });

        // Cerrar el menú al hacer clic en los enlaces
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                toggleMenu();
            });
        });

        // Cerrar el menú al hacer clic fuera
        document.addEventListener('click', function(e) {
            if (mobileMenu.classList.contains('active') && 
                !mobileMenu.contains(e.target) && 
                !menuToggle.contains(e.target)) {
                toggleMenu();
            }
        });

        // Cerrar el menú al presionar ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                toggleMenu();
            }
        });
    }

    // Portfolio Slider
    const portfolioSlider = document.querySelector('.portfolio-slider');
    if (portfolioSlider) {
        const slides = portfolioSlider.querySelectorAll('.slide');
        const prevBtn = portfolioSlider.querySelector('.prev');
        const nextBtn = portfolioSlider.querySelector('.next');
        const slidesContainer = portfolioSlider.querySelector('.slides');

        let currentIndex = 0;

        function getSlidesPerView() {
            if (window.innerWidth >= 1024) return 3;
            if (window.innerWidth >= 768) return 2;
            return 1;
        }

        function updateSlidesPerView() {
            const slidesPerView = getSlidesPerView();
            slidesContainer.style.setProperty('--slides-per-view', slidesPerView);
        }

        function updateSlidePosition() {
            const slidesPerView = getSlidesPerView();
            let slideWidth;
            if (slidesPerView === 1) {
                slideWidth = slides[0].offsetWidth;
            } else {
                slideWidth = slidesContainer.offsetWidth / slidesPerView;
            }
            slidesContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        }

        function moveSlide(direction) {
            const slidesPerView = getSlidesPerView();
            const maxIndex = slides.length - slidesPerView;
            if (direction === 'next') {
                currentIndex = Math.min(currentIndex + 1, maxIndex);
            } else {
                currentIndex = Math.max(currentIndex - 1, 0);
            }
            updateSlidePosition();
        }

        // Event Listeners
        prevBtn.addEventListener('click', () => moveSlide('prev'));
        nextBtn.addEventListener('click', () => moveSlide('next'));

        // Responsive handling
        window.addEventListener('resize', () => {
            updateSlidesPerView();
            currentIndex = Math.min(currentIndex, slides.length - getSlidesPerView());
            updateSlidePosition();
        });

        // Initial setup
        updateSlidesPerView();
        updateSlidePosition();
    }
});
