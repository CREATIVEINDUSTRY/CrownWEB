
var slideIndex = 0;
carousel();

function currentSlideSrr(n) {
  carouselA(slideIndex = n);
}

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
     var dots = document.getElementsByClassName("dot");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    dots[slideIndex-1].className += " active";
    setTimeout(carousel, 5000); // Change image every 5 seconds
}

function carouselA(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}