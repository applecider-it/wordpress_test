document.addEventListener('DOMContentLoaded', () => {
  console.log('swiper-init.js');

  const swiper = new Swiper('.swiper1', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });
});
