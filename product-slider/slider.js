


if  (screen.width <= 375 ) {
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 2.1,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
}
else if  (screen.width <= 560 && screen.width >= 376 ) {
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 2.36,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
    	} 
else if  (screen.width <= 768 && screen.width >= 561 ) {
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 2.9,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
    	}

else if  (screen.width <= 1024 && screen.width >= 770 ) {
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3.9,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
    	}


else {
    	var swiper = new Swiper('.swiper-container', {
	      slidesPerView: 5.15,
	      spaceBetween: 30,
	      pagination: {
	        el: '.swiper-pagination',
	        clickable: true,
	      },
   		 });
    	}    	