(function($) {

	//Only home page should start with header large
	$(document).ready(function() {
		$("header").removeClass("sm-header-height").addClass("lg-header-height");
		$(".content-area").removeClass("sm-header-margin").addClass("lg-header-margin");

		//Show header content like "hi am" text
		$("#large-header").addClass("d-block");
		$(".navbar").addClass("navHide");

		//Fade in welcome button
		//$(".btn-home-page").fadeIn(500);
		setTimeout(function(){
			$("#btn-home-container").removeClass("btn-home-hide").addClass("btn-home-show");
		},2000);
	})

	$(document).on("scroll", function() {

		//console.log($(document).scrollTop(), "header scrolling firing");

		if($(document).scrollTop()>5) {
			//Entering main content area and header should be small
			$("header").removeClass("lg-header-height").addClass("sm-header-height");
			$(".content-area").removeClass("lg-header-margin").addClass("sm-header-margin");
			$("#large-header").removeClass("d-block");

			//Logic seems unesessary below but required in this order to have smooth animations
			$(".navbar").addClass( "navShow");
			$(".navbar").removeClass( "navHide");			
		} 
		//TODO:  Figure out how to enable this stuff
		// else {
		// 	//Entering site landing page and header should be large			
		// 	$("header").removeClass("small").addClass("large");
		// 	$(".content-area").removeClass("sm-header-margin").addClass("lg-header-margin")
		// }
	});

}(jQuery));
