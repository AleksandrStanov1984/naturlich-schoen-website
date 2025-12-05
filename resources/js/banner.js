document.addEventListener("DOMContentLoaded", () => {

    const slides = document.querySelectorAll(".promoSlide");
    const dots = document.querySelectorAll(".promoDot");
    const prev = document.getElementById("promoPrev");
    const next = document.getElementById("promoNext");

    let index = 0;
    const total = slides.length;
    let autoSlide;

    function showSlide(i) {
        slides.forEach((slide, s) => {
            slide.style.opacity = (s === i ? "1" : "0");
        });

        dots.forEach((dot, d) => {
            dot.classList.toggle("bg-green-700", d === i);
            dot.classList.toggle("bg-green-300", d !== i);
        });
    }

    function nextSlide() {
        index = (index + 1) % total;
        showSlide(index);
    }

    function prevSlideFunc() {
        index = (index - 1 + total) % total;
        showSlide(index);
    }

    // --- ARROWS ---
    next.addEventListener("click", nextSlide);
    prev.addEventListener("click", prevSlideFunc);

    // --- DOTS ---
    dots.forEach((dot, d) => {
        dot.addEventListener("click", () => {
            index = d;
            showSlide(index);
        });
    });

    // --- AUTO PLAY ---
    function startAuto() {
        autoSlide = setInterval(nextSlide, 5000); // каждые 5 сек
    }

    function stopAuto() {
        clearInterval(autoSlide);
    }

    // Автопереключение Start
    startAuto();

    // При наведении — стоп, при выходе — снова старт
    document.getElementById("promoBanner").addEventListener("mouseenter", stopAuto);
    document.getElementById("promoBanner").addEventListener("mouseleave", startAuto);

    // --- SWIPE для мобильных ---
    let touchStartX = 0;

    slides.forEach(slide => {
        slide.addEventListener("touchstart", e => {
            touchStartX = e.changedTouches[0].clientX;
        });

        slide.addEventListener("touchend", e => {
            let touchEndX = e.changedTouches[0].clientX;
            let diff = touchStartX - touchEndX;

            if (diff > 50) nextSlide();      // свайп влево
            if (diff < -50) prevSlideFunc(); // свайп вправо
        });
    });

    // Первая отрисовка
    showSlide(index);
});
