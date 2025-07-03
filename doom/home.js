document.addEventListener('DOMContentLoaded', function () {
    const carousels = document.querySelectorAll('.carousel-container');

    carousels.forEach(container => {
        const carousel = container.querySelector('.carousel');
        const prev = container.querySelector('.prev');
        const next = container.querySelector('.next');

        const scrollAmount = 300;

        prev.addEventListener('click', () => {
            carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });

        next.addEventListener('click', () => {
            carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });
    });
});
