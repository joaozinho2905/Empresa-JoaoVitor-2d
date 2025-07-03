
    document.addEventListener('DOMContentLoaded', function () {
        const carousel = document.getElementById("carousel");
        const prev = document.querySelector(".prev");
        const next = document.querySelector(".next");

        const scrollAmount = 300; // Quantidade de rolagem em pixels

        prev.addEventListener("click", function () {
            carousel.scrollBy({ left: -scrollAmount, behavior: "smooth" });
        });

        next.addEventListener("click", function () {
            carousel.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });
