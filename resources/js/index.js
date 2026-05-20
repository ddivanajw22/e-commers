<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

document.addEventListener('DOMContentLoaded', function() {
var swiper = new Swiper(".heroSwiper", {
    loop: true,
    speed: 1000,             
    effect: "fade",           
    fadeEffect: { 
     crossFade: true 
    },
    autoplay: {
        delay: 3500,            
        disableOnInteraction: false, 
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });
