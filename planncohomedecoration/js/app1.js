
$(document).ready(function(){

    // Start Back to Top
   $(".btn-backtotops").hide();
    $(window).scroll(function () {
        let getscrolltop = $(this).scrollTop();
        // console.log(getscrolltop);

        if (getscrolltop >= 370) {
            $(".btn-backtotops").fadeIn(1000);
        } else {
            $(".btn-backtotops").fadeOut(1000);
        }
    });

    // End Back to Top

    $('.navbuttons').click(function(){
        $(this).toggleClass('crossxs');
    });

    //for nav
   $(window).scroll(function(){
    let getscrolltop = $(this).scrollTop();
    console.log(getscrolltop);

    if(getscrolltop >= 200){
        $('.navbar').addClass('navmenus');
    }else{
        $('.navbar').removeClass('navmenus');
    };
   });

   //Start Property
    $('.propertylists').click(function(){
        $(this).addClass('activeitems').siblings().removeClass('activeitems');
   

    //for filter
    let getattvalue= $(this).attr("data-filter");
        console.log(getattvalue);

        if(getattvalue === "all"){
            $(".filters").show("slide",500);
        }else{

            $(".filters").not("."+getattvalue).hide("slide",500);

            $(".filters").filter("."+getattvalue).show("slide",500);
        }
    
  

   });

     //for image overlay (or) lightbox2
     lightbox.option({
        showImageNumberLabel:false,
        positionFromTop:200
      })
 
   //End Property

   //Start Adv Section
     $(window).scroll(function(){
        let getscrollTop = $(this).scrollTop();
        // console.log(getscrollTop);

        if(getscrollTop >= 900){
            $(".advimages").addClass('fromlefts');
            $(".advtexts").addClass('fromrights');
            
        }else{
            $(".advimages").removeClass('fromlefts');
            $(".advtexts").removeClass('fromrights');
          
        }
     });

     $(".floral").click(function(){
        $('.missions').toggleClass('advbackgrounds');
        $(this).toggleClass('darkblues')
     })
   //End Adv Section

   // Start Footer Section
   const getyear=$("#getyear");
   const getfullyear=new Date().getUTCFullYear();
   getyear.text(getfullyear);
   // End Footer Section


});

