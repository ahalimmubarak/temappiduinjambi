document.addEventListener('DOMContentLoaded', function () {

    const menuBtn = document.getElementById("menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");

    // Toggle Menu Mobile
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");
        });
    }

    // Toggle Submenu Mobile
    document.addEventListener("click", function (e) {

        const toggle = e.target.closest(".submenu-toggle");

        if (toggle) {
            const submenu = toggle.nextElementSibling;
            const icon = toggle.querySelector(".submenu-icon");

            if (submenu) submenu.classList.toggle("hidden");
            if (icon) icon.classList.toggle("rotate-180");
        }

    });

    // --- Fungsi untuk Search Overlay ---
    const searchToggle = document.getElementById('search-toggle');
    const searchOverlay = document.getElementById('search-overlay');
    const closeSearchOverlay = document.getElementById('close-search-overlay');
    const searchFormInput = document.getElementById('search-form-input');

    if (searchToggle && searchOverlay && closeSearchOverlay) {
        
        const openSearch = () => {
            searchOverlay.classList.remove('hidden');
            searchOverlay.classList.add('flex');
            if (searchFormInput) {
                setTimeout(() => searchFormInput.focus(), 100);
            }
        };

        const closeSearch = () => {
            searchOverlay.classList.add('hidden');
            searchOverlay.classList.remove('flex');
        };

        searchToggle.addEventListener('click', openSearch);
        closeSearchOverlay.addEventListener('click', closeSearch);

        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !searchOverlay.classList.contains('hidden')) {
                closeSearch();
            }
        });

        searchOverlay.addEventListener('click', (e) => {
            if (e.target === searchOverlay) {
                closeSearch();
            }
        });
    }

    // --- Fungsi back to top button ---
    const btn = document.getElementById('backToTop');
    if (btn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                btn.classList.remove('hidden');
            } else {
                btn.classList.add('hidden');
            }
        });

        btn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }


    // otomatis ambil URL halaman sekarang
    const url = encodeURIComponent(window.location.href);
    document.querySelectorAll('a.share-link').forEach(link => {
        const base = link.dataset.base; // ambil base URL dari data attribute
        if (base) {
            link.href = base + url;
        }
    });


    // =========================
    // HERO SLIDER
    // =========================
    initSlider('#slider-track', 'prev-hero', 'next-hero');

});


// Modal
function openImageModal(src) {
    document.getElementById('modalImg').src = src;
    document.getElementById('imageModal').classList.remove('hidden');
    document.getElementById('imageModal').classList.add('flex');
}
function closeImageModal() {
    document.getElementById('imageModal').classList.remove('flex');
    document.getElementById('imageModal').classList.add('hidden');
}

// jam di header
function updateClock() {
    const dateEl = document.getElementById("clock-date");
    const timeEl = document.getElementById("clock-time");
    if (!dateEl || !timeEl) return;

    const now = new Date();

    const hari = now.toLocaleDateString("id-ID", {
        weekday: "long",
        day: "numeric",
        month: "long",
        year: "numeric"
    });

    const h = String(now.getHours()).padStart(2, "0");
    const m = String(now.getMinutes()).padStart(2, "0");
    const s = String(now.getSeconds()).padStart(2, "0");

    dateEl.textContent = hari;
    timeEl.textContent = `${h}:${m}:${s}`;
}

document.addEventListener("DOMContentLoaded", () => {
    updateClock();
    setInterval(updateClock, 1000);
});

// =========================
// HERO SLIDER
// =========================
function initSlider(trackSelector, prevBtnId, nextBtnId, speed = 8000) {

    const track = document.querySelector(trackSelector);
    if (!track) return;

    track.style.willChange = "transform";

    const prevBtn = document.getElementById(prevBtnId);
    const nextBtn = document.getElementById(nextBtnId);

    const slides = track.children;
    if (slides.length === 0) return;

    const totalSlides = slides.length;

    const firstClone = slides[0].cloneNode(true);
    track.appendChild(firstClone);

    let index = 0;
    let interval;

    function updateSlide() {
        track.style.transform = `translateX(-${index * 100}%)`;
    }

    function nextSlide() {

        index++;
        track.style.transition = 'transform 0.5s ease';
        updateSlide();

        if (index === totalSlides) {
            setTimeout(() => {
                track.style.transition = 'none';
                index = 0;
                updateSlide();
            }, 500);
        }

    }

    function prevSlide() {

        if (index === 0) {

            index = totalSlides;
            track.style.transition = 'none';
            updateSlide();

            setTimeout(() => {
                track.style.transition = 'transform 0.5s ease';
                index--;
                updateSlide();
            }, 20);

        } else {
            index--;
            updateSlide();
        }

    }

    function startAutoSlide() {
        interval = setInterval(nextSlide, speed);
    }

    function stopAutoSlide() {
        clearInterval(interval);
    }

    nextBtn?.addEventListener('click', () => {
        stopAutoSlide();
        nextSlide();
        startAutoSlide();
    });

    prevBtn?.addEventListener('click', () => {
        stopAutoSlide();
        prevSlide();
        startAutoSlide();
    });

    startAutoSlide();

    track.addEventListener('mouseenter', stopAutoSlide);
    track.addEventListener('mouseleave', startAutoSlide);

}