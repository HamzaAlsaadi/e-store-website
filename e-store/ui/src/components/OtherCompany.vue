<template>
    <section class="section-products">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <h2>Mobile Brand</h2>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="slider-wrapper">
            <button
                id="prev-slide"
                class="slide-button material-symbols-rounded"
            >
                .
            </button>
            <ul class="image-list">
                <router-link to="Samsung"
                    ><img
                        src="@/assets/Image/Samsung.png"
                        alt="Image 1"
                        class="image-item"
                /></router-link>

                <router-link to="Apple">
                    <img
                        src="@/assets/Image/apple.jpg"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Asus"
                    ><img
                        src="@/assets/Image/asus.jpg"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Google">
                    <img
                        src="@/assets/Image/Google.png"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Honor"
                    ><img
                        src="@/assets/Image/Honor.png"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Htc">
                    <img
                        src="@/assets/Image/Htc.png"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Huawei">
                    <img
                        src="@/assets/Image/Huawei.png"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Infinix">
                    <img
                        src="@/assets/Image/Infinix.png"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Lenovo">
                    <img
                        src="@/assets/Image/Lenovo.png"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Lg">
                    <img
                        src="@/assets/Image/Lg.png"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Meizu">
                    <img
                        src="@/assets/Image/Meizu.jpg"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Motorola">
                    <img
                        src="@/assets/Image/Motorola.jpg"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Nokia">
                    <img
                        src="@/assets/Image/Nokia.png"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Oneplus">
                    <img
                        src="@/assets/Image/Oneplus.png"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Oppo">
                    <img
                        src="@/assets/Image/Oppo.png"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Realme">
                    <img
                        src="@/assets/Image/Realme.png"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Sony">
                    <img
                        src="@/assets/Image/Sony.png"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Tecno">
                    <img
                        src="@/assets/Image/Tecno.png"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Vivo">
                    <img
                        src="@/assets/Image/Vivo.jpg"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Xiaomi">
                    <img
                        src="@/assets/Image/Xiaomi.png"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
                <router-link to="Zte">
                    <img
                        src="@/assets/Image/Zte.jpg"
                        alt="Image 1"
                        class="image-item"
                /></router-link>
            </ul>
            <button
                id="next-slide"
                class="slide-button material-symbols-rounded"
            >
                >
            </button>
        </div>
        <div class="slider-scrollbar">
            <div class="scrollbar-track">
                <div class="scrollbar-thumb"></div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "OtherCompany",
    mounted() {
        this.initSlider();
        window.addEventListener("resize", this.initSlider);
        window.addEventListener("load", this.initSlider);
    },
    beforeUnmount() {
        window.removeEventListener("resize", this.initSlider);
        window.removeEventListener("load", this.initSlider);
    },
    methods: {
        initSlider() {
            const imageList = document.querySelector(
                ".slider-wrapper .image-list"
            );
            const slideButtons = document.querySelectorAll(
                ".slider-wrapper .slide-button"
            );
            const sliderScrollbar = document.querySelector(
                ".container .slider-scrollbar"
            );
            const scrollbarThumb =
                sliderScrollbar.querySelector(".scrollbar-thumb");
            const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

            scrollbarThumb.addEventListener("mousedown", (e) => {
                const startX = e.clientX;
                const thumbPosition = scrollbarThumb.offsetLeft;
                const maxThumbPosition =
                    sliderScrollbar.getBoundingClientRect().width -
                    scrollbarThumb.offsetWidth;

                const handleMouseMove = (e) => {
                    const deltaX = e.clientX - startX;
                    const newThumbPosition = thumbPosition + deltaX;
                    const boundedPosition = Math.max(
                        0,
                        Math.min(maxThumbPosition, newThumbPosition)
                    );
                    const scrollPosition =
                        (boundedPosition / maxThumbPosition) * maxScrollLeft;

                    scrollbarThumb.style.left = `${boundedPosition}px`;
                    imageList.scrollLeft = scrollPosition;
                };
                const handleMouseUp = () => {
                    document.removeEventListener("mousemove", handleMouseMove);
                    document.removeEventListener("mouseup", handleMouseUp);
                };
                document.addEventListener("mousemove", handleMouseMove);
                document.addEventListener("mouseup", handleMouseUp);
            });
            slideButtons.forEach((button) => {
                button.addEventListener("click", () => {
                    const direction = button.id === "prev-slide" ? -1 : 1;
                    const scrollAmount = imageList.clientWidth * direction;
                    imageList.scrollBy({
                        left: scrollAmount,
                        behavior: "smooth",
                    });
                });
            });
            const handleSlideButtons = () => {
                slideButtons[0].style.display =
                    imageList.scrollLeft <= 0 ? "none" : "flex";
                slideButtons[1].style.display =
                    imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
            };
            const updateScrollThumbPosition = () => {
                const scrollPosition = imageList.scrollLeft;
                const thumbPosition =
                    (scrollPosition / maxScrollLeft) *
                    (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
                scrollbarThumb.style.left = `${thumbPosition}px`;
            };
            imageList.addEventListener("scroll", () => {
                updateScrollThumbPosition();
                handleSlideButtons();
            });
        },
    },
};
</script>

<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background: #f1f4fd;
}

.container {
    max-width: 1200px;
    width: 95%;
}

.slider-wrapper {
    position: relative;
}

.slider-wrapper .slide-button {
    position: absolute;
    top: 50%;
    outline: none;
    border: none;
    height: 50px;
    width: 50px;
    z-index: 5;
    color: black;
    display: flex;
    cursor: pointer;
    font-size: 2.2rem;
    background: #000;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transform: translateY(-50%);
}

.slider-wrapper .slide-button:hover {
    background: #404040;
    color: #404040;
}

.slider-wrapper .slide-button#prev-slide {
    left: -25px;
    display: none;
}

.slider-wrapper .slide-button#next-slide {
    right: -25px;
}

.slider-wrapper .image-list {
    grid-template-columns: repeat(10, 1fr);
    gap: 18px;
    font-size: 0;
    list-style: none;
    margin-bottom: 30px;
    overflow-x: auto;
    display: flex;
    scrollbar-width: none;
}

.slider-wrapper .image-list::-webkit-scrollbar {
    display: none;
}

.slider-wrapper .image-list .image-item {
    width: 180px;
    height: 180px;
    object-fit: cover;
}

.container .slider-scrollbar {
    height: 24px;
    width: 100%;
    display: flex;
    align-items: center;
}

.slider-scrollbar .scrollbar-track {
    background: #ccc;
    width: 100%;
    height: 2px;
    display: flex;
    align-items: center;
    border-radius: 4px;
    position: relative;
}

.slider-scrollbar:hover .scrollbar-track {
    height: 4px;
}

.slider-scrollbar .scrollbar-thumb {
    position: absolute;
    background: #000;
    top: 0;
    bottom: 0;
    width: 50%;
    height: 100%;
    cursor: grab;
    border-radius: inherit;
}

.slider-scrollbar .scrollbar-thumb:active {
    cursor: grabbing;
    height: 8px;
    top: -2px;
}

.slider-scrollbar .scrollbar-thumb::after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: -10px;
    bottom: -10px;
}

/* Styles for mobile and tablets */
@media only screen and (max-width: 1023px) {
    .slider-wrapper .slide-button {
        display: none !important;
    }

    .slider-wrapper .image-list {
        gap: 10px;
        margin-bottom: 15px;
        scroll-snap-type: x mandatory;
    }

    .slider-wrapper .image-list .image-item {
        width: 280px;
        height: 380px;
    }

    .slider-scrollbar .scrollbar-thumb {
        width: 20%;
    }
}

.section-products .header h2 {
    font-size: 2.2rem;
    font-weight: 400;
    color: #444444;
}

h2 {
    padding: 20px;
}
</style>
