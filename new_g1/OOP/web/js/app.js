$(document).ready(function(){
    $('.navbuttons').click(function(){
        $(this).toggleClass('crossxs');
         $('#navbarNav').collapse('toggle');
    });
    
    $(window).scroll(function(){
        let getscrolltop = $(this).scrollTop();
        if(getscrolltop >= 200){
            $('.navbar').addClass('navmenus');
        } else {
            $('.navbar').removeClass('navmenus');
        }
    });


    $('.nav-item.dropdown').hover(
            function() {
                $(this).find('.dropdown-menu').stop(true, true).slideDown('slow');
            },
            function() {
                $(this).find('.dropdown-menu').stop(true, true).slideUp('slow');
            }
        );


     $('.nav-link').click(function(){
        $('.nav-link').removeClass('active'); // Remove active class from all nav-links
        $(this).addClass('active'); // Add active class to the clicked nav-link
    });

 
    // about us
      
      $('.aboutus, .afterHover').hover(function() {
            $('.afterHover').stop().slideDown('slow');
        }, function() {
            $('.afterHover').stop().slideUp('slow');
        });

    //     
           $('.afterHover').hover(function() {
            $('.aboutus').addClass('underline', 1000);

           },function(){
            $('.aboutus').removeClass('underline', 1000);
           });


           // end navbar

           // start banner
           
           // end banner
});


