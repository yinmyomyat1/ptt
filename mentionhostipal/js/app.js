$(document).ready(function(){
	// console.log("hi");

	// Start Header Section

	// Start Banner Section

	// $(".carousel").carousel({
		// interval:500
	// });


	// End Banner Section


	// End Header Section

	// Start Info Section
	$(window).scroll(function(){
		let getscrollpoint = $(this).scrollTop();
		// console.log(getscrollpoint)

		if(getscrollpoint >= 220){
			$(".infotexts").addClass("fromlefts");
			$(".infopics").addClass("fromrights");
		}else{
			$(".infotexts").removeClass("fromlefts");
			$(".infopics").removeClass("fromrights");
		}
	});
	// End Info Section

	// Start Adv section
	$("#videos").click(function(){
		var getmodal = $(this).data("bs-target");
		var getvideosrc= $(this).data("video");
		var videourlwithauto = getvideosrc+"?autoplay=1";

		$(getmodal + " iframe").attr("src",videourlwithauto); 

		$(getmodal + " button.btn-close").click(function(){
			$(getmodal + " iframe").attr("src",getvideosrc);
		});

		$(getmodal).click('hidden.bs.modal',function(){
			$(getmodal + " iframe").attr("src",getvideosrc);
		})
	});
	// end ADV Section

	// Start premises Section
	$("#lightslider").lightSlider({
		// auto:true,
        item:4,
        loop:true,
        slideMove:2,
        speed:600
	}).play();

	
	// End premises Section


	// Start Pricing Section
	 $(window).scroll(function(){
	 	let getscroll=$(this).scrollTop();
	 	// console.log(getscroll);

	 	if(getscroll >= 2450){
	 		$(".cardones").addClass("movelefts");
	 		$(".cardtwos").addClass("movebottoms");
	 		$(".cardthrees").addClass("moverights");
	 	}else{
	 		$(".cardones").removeClass("movelefts");
	 		$(".cardtwos").removeClass("movebottoms");
	 		$(".cardthrees").removeClass("moverights");
	 	}
	 });
	 // end Pricing Section

	 // Start join us Section
	 $("#accordion").accordion();
	 // end join us section

	 // start footer
	 $("#getyear").text(new Date().getUTCFullYear());
	 // end footer

	 // Start progress
	 $(window).scroll(function(){
	 	var getprogress= $("#progresses");
	 	var getprogressvalues= $("#progressvalues");

	 	var getscrolltop=$(this).scrollTop();
	 	// console.log(getscrolltop);

	 	//formula st*100/(pjheight - cvheight)

// By jQ
	 	// var getscrollheight=$(document).height();
	 	// // console.log(getscrollheight);

	 	// var getclientheight=$(window).height();
	 	// // console.log(getclientheight);

	 	// var calcheight=getscrollheight - getclientheight;

	 	// var getfinalheight= Math.round(getscrolltop * 100/ calcheight);

	 	
// By Js
		
		var getscrollheight=document.documentElement.scrollHeight;
		var getclientheight=document.documentElement.clientHeight;

		var calcheight=getscrollheight - getclientheight;

	 	var getfinalheight= Math.round(getscrolltop * 100/ calcheight);



		getprogressvalues.text(`${getfinalheight}%`);

	 	getprogress.css({
	 		"background":`conic-gradient(steelblue ${getfinalheight}%,#eee ${getfinalheight}%)`
	 	});
	 	
	 });
	 // End progress

});