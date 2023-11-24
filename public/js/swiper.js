const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    slidesPerView : 3,
    spaceBetween: 30,
    slidesPerGroup: 5,
    loopFillGroupWithBlank: true,
    pagination: {
      el: '.swiper-pagination',
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });