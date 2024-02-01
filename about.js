let slideIndex = 1;
showSlides(slideIndex);


function plusSlides(n) {
  showSlides(slideIndex += n);
}


function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

document.addEventListener("DOMContentLoaded", function() {
  
  var contactForm = document.getElementById("contactForm");
  
  if (contactForm) {
      contactForm.addEventListener("submit", function(event) {
          event.preventDefault(); 

          
          if (validateForm()) {
              contactForm.submit();
          }
      });
  }

  
  function validateForm() {
      var message = document.getElementById("contact_message").value;
      var errorMessage = document.getElementById("error_message");
      
      if (message.trim() === "") {
          alert("Please enter a message.");
          return false;
      }

      
      errorMessage.textContent = "";
      return true; 
  }
});

