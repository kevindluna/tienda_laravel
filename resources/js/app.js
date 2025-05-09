console.log("Panel de Tienda cargado.");

// === MENÚ RESPONSIVE ===
window.toggleMenu = function () {
    const nav = document.getElementById('navLinks');
    nav.classList.toggle('show');
}


// === CARRUSEL PRINCIPAL ===
window.addEventListener("load", () => {

    const carouselTrack = document.getElementById("carouselTrack");
    if (carouselTrack) {
        const slides = carouselTrack.querySelectorAll("img");
        const totalSlides = slides.length;
        let currentIndex = 0;

        function updateCarousel(animate = true) {
            carouselTrack.style.transition = animate ? 'transform 0.5s ease-in-out' : 'none';
            carouselTrack.style.transform = `translateX(-${currentIndex * 100}vw)`;
        }

        function nextCarouselSlide() {
            currentIndex++;
            if (currentIndex >= totalSlides) currentIndex = 0;
            updateCarousel();
        }

        setInterval(nextCarouselSlide, 5000);
    }

    // === CARRUSEL DE PRODUCTOS ===
    const productTrack = document.getElementById("sliderTrack");
    const productos = Array.from(productTrack.children);
    const sliderContainer = document.querySelector(".slider-container");

    let productIndex = 0;
    let itemWidth = productos[0].offsetWidth + 20;
    let visibleItems = calcularVisibles();
    let interval;

    function calcularVisibles() {
        const width = window.innerWidth;
        if (width <= 768) return 2;
        if (width <= 1024) return 3;
        return 5;
    }

    function updateSlider() {
        itemWidth = productos[0].offsetWidth + 20;
        productTrack.style.transition = "transform 0.5s ease-in-out";
        productTrack.style.transform = `translateX(-${productIndex * itemWidth}px)`;
    }

    function moveNext() {
        productIndex++;
        updateSlider();
        if (productIndex >= productos.length - visibleItems) {
            setTimeout(() => {
                productTrack.style.transition = "none";
                productIndex = 0;
                productTrack.style.transform = `translateX(0px)`;
            }, 500);
        }
    }

    function movePrev() {
        if (productIndex === 0) {
            productTrack.style.transition = "none";
            productIndex = productos.length - visibleItems;
            productTrack.style.transform = `translateX(-${productIndex * itemWidth}px)`;
            setTimeout(() => {
                updateSlider();
            }, 20);
        } else {
            productIndex--;
            updateSlider();
        }
    }

    function resetInterval() {
        clearInterval(interval);
        interval = setInterval(moveNext, 3000);
    }

    // Botones
    document.querySelector(".slider-btn.next").onclick = () => {
        moveNext();
        resetInterval();
    };

    document.querySelector(".slider-btn.prev").onclick = () => {
        movePrev();
        resetInterval();
    };

    // Hover / táctil
    sliderContainer.addEventListener("mouseenter", () => clearInterval(interval));
    sliderContainer.addEventListener("mouseleave", resetInterval);
    sliderContainer.addEventListener("touchstart", () => clearInterval(interval));
    sliderContainer.addEventListener("touchend", resetInterval);

    // Resize
    window.addEventListener("resize", () => {
        visibleItems = calcularVisibles();
        itemWidth = productos[0].offsetWidth + 20;
        updateSlider();
    });

    // Swipe táctil
    let startX = 0;
    let isDragging = false;

    sliderContainer.addEventListener("touchstart", (e) => {
        startX = e.touches[0].clientX;
        isDragging = true;
    });

    sliderContainer.addEventListener("touchmove", (e) => {
        if (!isDragging) return;
        let currentX = e.touches[0].clientX;
        let diff = startX - currentX;

        if (Math.abs(diff) > 50) {
            if (diff > 0) moveNext();
            else movePrev();
            isDragging = false;
            resetInterval();
        }
    });

    sliderContainer.addEventListener("touchend", () => {
        isDragging = false;
    });

    resetInterval();
});
const carouselTrack = document.getElementById("carouselTrack");
const carouselImages = carouselTrack.querySelectorAll("img");
let currentSlide = 0;
let autoSlideInterval;

// 👉 Muestra el slide actual
function updateCarousel(animate = true) {
    if (animate) {
        carouselTrack.style.transition = "transform 0.5s ease-in-out";
    } else {
        carouselTrack.style.transition = "none";
    }
    carouselTrack.style.transform = `translateX(-${currentSlide * 100}vw)`;
}

// 👉 Botón siguiente
function nextSlide() {
    currentSlide = (currentSlide + 1) % carouselImages.length;
    updateCarousel();
    resetAutoSlide();
}

// 👉 Botón anterior
function prevSlide() {
    currentSlide = (currentSlide - 1 + carouselImages.length) % carouselImages.length;
    updateCarousel();
    resetAutoSlide();
}

// 👉 Auto deslizar
function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
        nextSlide();
    }, 5000);
}

function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    startAutoSlide();
}

// 👉 Iniciar carrusel al cargar
window.addEventListener("load", () => {
    updateCarousel(false);
    startAutoSlide();
});

