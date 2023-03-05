var swiper = new Swiper(".reviews-slider", {
    spaceBetween:13,
    grabCursor:true,
    loop:true,
    centeredSlides: true,
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    breakpoints: {
    0: {
        slidesPerView: 1,
      },
    768:{
        slidesPerView:3,
      },
    1024:{
        slidesPerView:5,
    },
    },
    pagination: {
             el: ".swiper-pagination1",
             clickable:true,
           },
  });
var swiper = new Swiper(".category-slider", {
    // slidesPerView: 3,

    spaceBetween:15,
    grabCursor:true,
    loop:true,
    centeredSlides: true,
    direction: 'horizontal',
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    breakpoints: {
    0: {
        slidesPerView: 1,
      },
    768:{
        slidesPerView:3,
      },
    1024:{
        slidesPerView:3,
    },
    },

  });
