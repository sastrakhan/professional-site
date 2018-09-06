(function($) {

	//Only home page should start with header large
	$(document).ready(function() {
		$("header").removeClass("small").addClass("large");
		$(".content-area").removeClass("sm-header-margin").addClass("lg-header-margin");
		$("#large-header").css("display", "block");
	});

	$(document).on("scroll", function() {

		//console.log($(document).scrollTop(), "header scrolling firing");

		if($(document).scrollTop()>5) {
			//Entering main content area and header should be small
			$("header").removeClass("large").addClass("small");
			$(".content-area").removeClass("lg-header-margin").addClass("sm-header-margin")
		} 
		//TODO:  Figure out how to enable this stuff
		// else {
		// 	//Entering site landing page and header should be large			
		// 	$("header").removeClass("small").addClass("large");
		// 	$(".content-area").removeClass("sm-header-margin").addClass("lg-header-margin")
		// }
	});

}(jQuery));
