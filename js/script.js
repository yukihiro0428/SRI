let main_Swiper2 = new Swiper(".main .swiper-container", {
  loop: true,
  slidesPerView: 1,
  speed: 500,
  effect: "fade",
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
});

let sec04_Swiper1 = new Swiper(".sec04 .swiper-container", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 30,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    1080: {
      slidesPerView: 2,
    },
    1242: {
      slidesPerView: 3,
    },
    1670: {
      slidesPerView: 4,
    },
  },
});


jQuery(function() {
  jQuery('.hamburger').click(function() {
      jQuery(this).toggleClass('active');

      if (jQuery(this).hasClass('active')) {
          jQuery('.globalMenuSp').addClass('active');
      } else {
          jQuery('.globalMenuSp').removeClass('active');
      }
  });
});
