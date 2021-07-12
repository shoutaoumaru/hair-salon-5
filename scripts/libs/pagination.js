const swiper = new Swiper('#pagination', {
  // Optional parameters
  loop: true,
  // effect: 'fade',
  // effect: 'coverflow',
  pagination: {
    el: '.swiper-pagination',
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
