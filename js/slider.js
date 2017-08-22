var slideIndex = 0;
carousel();


function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");

    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
   
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 5000); // Change image every 5 seconds
<<<<<<< HEAD
}

=======
}
>>>>>>> f50fd3c00ac497d4e916b72a242a0a9dda611f6d
