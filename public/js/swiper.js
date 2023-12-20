const swiper = new Swiper(".swiper", {
    direction: "horizontal",
    loop: false,
    slidesPerView: 1,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    scrollbar: {
        el: ".swiper-scrollbar",
    },
    breakpoints: {
        728: {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
        },
    },
});
