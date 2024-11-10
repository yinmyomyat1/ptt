$(document).ready(function(){
	
	// Start Header

		// Start nav
		// for bugger
			$(".navbuttons").click(function(){
				$(".navbuttons").toggleClass("crossxs");
			});

			// for navbuttons
			$(window).scroll(function(){

				let getscrolltop = $(this).scrollTop();

				// console.log("getscrolltop");

				if(getscrolltop >= 200 ){
					$(".navbar").addClass("navmenus");
				}else{
					$(".navbar").removeClass("navmenus");
				}
			});



		// ENd nav

	// End Header

	// Start Properties
	$(".propertylists").click(function(){

		// for active item

		// $(this).addClass("activeitems");
		// $(this).siblings().removeClass("activeitems");

		$(this).addClass("activeitems").siblings().removeClass("activeitems");

		// for filter

		let getattvalue= $(this).attr("data-filter");
		console.log(getattvalue);

		if(getattvalue === "all"){
			$(".filters").show("slide",500);
		}else{

			$(".filters").not("."+getattvalue).hide("slide",500);

			$(".filters").filter("."+getattvalue).show("slide",500);
		}

	});

	// for image overlay (or) lightbox2
	lightbox.option({

		'resizeDuration': 200,
      'wrapAround': true

	});
	// End Properties

});

