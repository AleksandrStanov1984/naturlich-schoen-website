import './bootstrap';
import './banner';

// ACCORDION LOGIC
document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".accordion-item");

    items.forEach(item => {
        const btn = item.querySelector(".accordion-btn");
        const content = item.querySelector(".accordion-content");
        const icon = item.querySelector(".accordion-icon");

        // Установка начальной высоты (закрыто)
        content.style.maxHeight = "0px";

        btn.addEventListener("click", () => {

            // закрываем все остальные
            items.forEach(i => {
                if (i !== item) {
                    const otherContent = i.querySelector(".accordion-content");
                    const otherIcon = i.querySelector(".accordion-icon");
                    otherContent.style.maxHeight = "0px";
                    otherIcon.textContent = "+";
                }
            });

            // переключаем текущий
            if (content.style.maxHeight === "0px") {
                content.style.maxHeight = content.scrollHeight + "px";
                icon.textContent = "–";
            } else {
                content.style.maxHeight = "0px";
                icon.textContent = "+";
            }
        });
    });
});


//CAROUSEL  LOGIC
document.addEventListener("DOMContentLoaded", () => {
    const track = document.getElementById("carouselTrack");
    const prev = document.getElementById("carouselPrev");
    const next = document.getElementById("carouselNext");

    let index = 0;
    const items = track.children.length;
    const visible = 3; // сколько видно одновременно

    function updateCarousel() {
        const width = track.children[0].offsetWidth + 16; // ширина + gap
        track.style.transform = `translateX(-${index * width}px)`;
    }

    next.addEventListener("click", () => {
        index++;
        if (index > items - visible) index = 0; // бесконечный цикл
        updateCarousel();
    });

    prev.addEventListener("click", () => {
        index--;
        if (index < 0) index = items - visible;
        updateCarousel();
    });

    // Автоматическая прокрутка
    setInterval(() => next.click(), 8000);
});


