var slideIndex = 1;
showSlides(slideIndex);


function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  //for (i = 0; i < dots.length; i++) {
     // dots[i].className = dots[i].className.replace(" active", "");
 // }
  slides[slideIndex-1].style.display = "block";  
  //dots[slideIndex-1].className += " active";
  


}
//var slides = document.querySelectorAll('#slides .slide');
//var currentSlide = 0;
//var slideInterval = setInterval(nextSlide,2000);

//function nextSlide(){
//	slides[currentSlide].className = 'slide';
//	currentSlide = (currentSlide+1)%slides.length;
//	slides[currentSlide].className = 'slide showing';
//}

var playing = true;
var pauseButton = document.getElementById('pause');

function pauseSlideshow(){
	pauseButton.innerHTML = 'Play';
	playing = false;
	clearInterval(slideInterval);
}

function playSlideshow(){
	pauseButton.innerHTML = 'Pause';
	playing = true;
	slideInterval = setInterval(nextSlide,2000);
}

pauseButton.onclick = function(){
	if(playing){ pauseSlideshow(); }
	else{ playSlideshow(); }
};