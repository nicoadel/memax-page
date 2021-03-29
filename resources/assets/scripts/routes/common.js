/* eslint-disable no-undef */
/* eslint-disable no-unused-vars */
export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    //init swiper on load event, else it gets wrong slide width
    window.addEventListener('load', () => {
      var mainSwiper = new Swiper('.swiper-container-main', {
        // Optional parameters
        loop: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        grabCursor: true,
        autoplay: {
          delay: 8000,
        },
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      })

      var seasonSwiper = new Swiper('.season-slider__swiper', {
        grabCursor: true,
        initialSlide: 1,
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          // when window width is >= 767px
          767: {
            slidesPerView: 'auto',
            spaceBetween: 40,
          },
        },
        // Navigation arrows
        navigation: {
          nextEl: '.season-button-next',
          prevEl: '.season-button-prev',
        },
      })

      var immoSwiper = new Swiper('.swiper-container-immo', {
        // Optional parameters
        loop: true,
        observer: true,
        observeParents: true,
        centeredSlides: true,
        grabCursor: true,
        slidesPerView: 1.2,
        spaceBetween: 50,
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      })

      mainSwiper.init();
    }, false);

    AOS.init();
    $(window).on('scroll', function () {
      if ($(window).scrollTop()) {
        $('nav').addClass('black');
      } else {
        $('nav').removeClass('black');
      }
    })

    document.getElementById('navbar-toggler').onclick = function () {
      document.getElementById('navbar-toggler').classList.toggle('is-active');
      document.getElementById('header').classList.toggle('is-active');
    };

  },
};
