
// document.addEventListener("DOMContentLoaded", function() {
//     var buttons = document.querySelectorAll(".see-more-btn");
//     buttons.forEach(function(button) {
//         button.addEventListener("click", function() {
//             var parent = this.closest('.col-lg-6').querySelector('p.about-client');
//             var dots = parent.querySelector(".dots");
//             var moreText = parent.querySelector(".more");

//             if (dots.style.display === "none") {
//                 dots.style.display = "inline";
//                 this.innerHTML = "See More";
//                 moreText.style.display = "none";
//                 // slideUp(moreText);
//             } else {
//                 dots.style.display = "none";
//                 this.innerHTML = "See Less";
//                 moreText.style.display = "inline";
//                 // slideDown(moreText);
//             }
//         });
//     });
// });

// $(document).ready(function(){
//     $(".see-more-btn").click(function(){
//       $(".more").slideToggle();
//     });
//   });

$(document).ready(function(){
    $(".see-more-btn").click(function(){
        // Find the closest parent row
        var parentRow = $(this).closest('.row');
        
        // Toggle the more text within that row
        parentRow.find('.more').slideToggle();
        parentRow.find('.dots').toggle();
        // Optionally, you can also toggle the "See More" button text to "See Less"
        var buttonText = $(this).text() === "See More" ? "See Less" : "See More";
        $(this).text(buttonText);
    });
});
