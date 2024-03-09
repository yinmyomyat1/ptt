 // $(document).ready(function(){
 //    $('.carousel').carousel();
 //  });
// Define the interval in milliseconds (e.g., 3000 milliseconds = 3 seconds)
var interval = 3500;

// Function to transition to the next slide
function nextSlide() {
    // Trigger the click event on the next slide control
    document.querySelector('.carousel-control-next').click();
}

// Set up the interval to call the nextSlide() function every 'interval' milliseconds
var slideInterval = setInterval(nextSlide, interval);

// Stop the automatic sliding when the user interacts with the carousel
$('.carousel-control-next, .carousel-control-prev').click(function() {
    clearInterval(slideInterval);
    // Reset the interval after each slide transition
    slideInterval = setInterval(nextSlide, interval);
});