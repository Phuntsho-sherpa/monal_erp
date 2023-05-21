

// accounting

function fade($ele) {
  $ele.fadeIn(1000).delay(3000).fadeOut(1000, function() {
      var $next = $(this).next('.quote');
      fade($next.length > 0 ? $next : $(this).parent().children().first());
 });
}
fade($('.quoteLoop > .quote').first());


/*----------------------------------------------------*/
/* Navigation
------------------------------------------------------ */

$(window).scroll(function() {

  if ($(window).scrollTop() > 300) {
      $('.main_nav').addClass('sticky');
  } else {
      $('.main_nav').removeClass('sticky');
  }
});

const myslide = document.querySelectorAll('.myslide'),

	  dot = document.querySelectorAll('.dot');

let counter = 1;

slidefun(counter);



let timer = setInterval(autoSlide, 8000);

function autoSlide() {

	counter += 1;

	slidefun(counter);

}

function plusSlides(n) {

	counter += n;

	slidefun(counter);

	resetTimer();

}

function currentSlide(n) {

	counter = n;

	slidefun(counter);

	resetTimer();

}

function resetTimer() {

	clearInterval(timer);

	timer = setInterval(autoSlide, 8000);

}



function slidefun(n) {

	

	let i;

	for(i = 0;i<myslide.length;i++){

		myslide[i].style.display = "none";

	}

	for(i = 0;i<dot.length;i++) {

		dot[i].className = dot[i].className.replace(' active', '');

	}

	if(n > myslide.length){

	   counter = 1;

	   }

	if(n < 1){

	   counter = myslide.length;

	   }

	myslide[counter - 1].style.display = "block";

	dot[counter - 1].className += " active";

}





