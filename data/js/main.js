

//testmonials

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  grabCursor: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});



  //counter

  $(document).ready(function() {
    $('.counter').counterUp({
      delay: 10,
      time: 1200
    });
  });
  
