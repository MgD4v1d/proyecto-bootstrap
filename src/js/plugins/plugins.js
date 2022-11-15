import AOS from 'aos';
import 'aos/dist/aos.css';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';



AOS.init({
  // Global settings:
  debounceDelay: 50,
  // the delay on debounce used while resizing window (advanced)
  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  once: false,
  // whether animation should happen only once - while scrolling down
  mirror: true // whether elements should animate out while scrolling past them

});


const swiper = new Swiper('.swiper', {
    parallax: true,
    loop: true,
    effect: "fade",
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pauseOnMouseEnter: false,
  
    // If we need pagination
    // pagination: {
    //   el: '.swiper-pagination',
    // },
  
  });
  


