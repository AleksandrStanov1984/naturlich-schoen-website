import './bootstrap';
import './banner';

// ACCORDION LOGIC
document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".accordion-item");

    items.forEach(item => {
        const btn = item.querySelector(".accordion-btn");
        const content = item.querySelector(".accordion-content");
        const icon = item.querySelector(".accordion-icon");

        btn.addEventListener("click", () => {

            // закрываем все остальные
            items.forEach(i => {
                if (i !== item) {
                    i.querySelector(".accordion-content").classList.add("hidden");
                    i.querySelector(".accordion-icon").textContent = "+";
                }
            });

            // переключаем текущий
            content.classList.toggle("hidden");

            icon.textContent = content.classList.contains("hidden") ? "+" : "–";
        });
    });
});

