
// var swiper = new swiper(".reviews-slider" , {
//     spaceBetween:10,
//     grabCursor:true,
//     loop:true,
//     centeredSlides:true,
//     autoplay:{
//         delay:9500,
//         disableOnInteraction: false,

//     },
//     breakpoints:{
//         0:{
//             slidesPerView:1,
//         },
//         768:{
//             slidesPerView:2,
//         },
//         1024:{
//             slidesPerView:3,
//         },
//         }
//     }
// );
var swiper = new Swiper(".reviews-slider", {
    spaceBetween:10,
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
        slidesPerView:2,
      },
    1024:{
        slidesPerView:3,
    },
    },
    pagination: {
             el: ".swiper-pagination1",
             clickable:true,
           },
  });

  let comment = document.getElementById(`comment`);
  let submit = document.getElementById(`submit`);
  comment.addEventListener('click', getData);
  submit.addEventListener('click', hidden);
  function getData (){
    document.getElementById(`comment_section`).style.cssText=`display: block;`


  }
  function hidden (){
    document.getElementById(`comment_section`).style.cssText=`display: none;`


  }
// var swiper = new Swiper(".coach-slider", {
//     spaceBetween:10,
//     grabCursor:true,
//     loop:true,
//     centeredSlides: true,
//     autoplay: {
//       delay: 9500,
//       disableOnInteraction: false,
//     },
//     breakpoints: {
//     0: {
//         slidesPerView: 1,
//       },
//     768:{
//         slidesPerView:2,
//       },
//     1024:{
//         slidesPerView:3,
//     },
//     },
//     pagination: {
//              el: ".swiper-pagination1",
//              clickable:true,
//            },
//   });




