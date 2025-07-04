document.addEventListener('DOMContentLoaded', () => {
    const sliders = document.querySelectorAll('.slides');
    const controls = document.querySelectorAll('.controls');
    const intervalTime = 5000; // Tiempo en milisegundos (5 segundos)
    console.log(sliders);
    sliders.forEach((slides, index) => {
        const slideCount = slides.children.length;
        let currentIndex = 0;
        

        const updateSlide = () => {
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        };

        const nextSlide = () => {
            currentIndex = (currentIndex + 1) % slideCount;
            updateSlide();
        };

        // Configurar navegación manual
        if (controls[index]) {
            const prev = controls[index].querySelector('.prev');
            const next = controls[index].querySelector('.next');

            prev.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + slideCount) % slideCount;
                updateSlide();
            });

            next.addEventListener('click', () => {
                nextSlide();
            });
        }

        // Configurar navegación automática
        setInterval(nextSlide, intervalTime);
    });
});