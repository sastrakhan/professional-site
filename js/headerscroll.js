(function($) {

	//Only home page should start with header large
	$(document).ready(function() {
		var pathname = window.location.href; // Returns path only

		if(pathname.includes("skills")){
			var pageHeight = $(document).height();
			$('html, body').animate({ scrollTop: 10 }, 50);
			$( "#loadingAside" ).hide( "slow");
		}
		else{
			$( "#loadingAside" ).show();
			$("header").hide();

			$("header").removeClass("sm-header-height").addClass("lg-header-height");
			$(".content-area").removeClass("sm-header-margin").addClass("lg-header-margin");
	
			//Show header content like "hi am" text
			$("#large-header").addClass("d-block");
			$(".navbar").addClass("navHide");	
		}

		if(pathname.includes("wpcf7")){
			$("#openingQuote").append( "<h2 style='color: #F3C0E2;'>Thanks for your message!</h2>" );
		}

		//Button on landing page
		$("#btn-home").click(function () {
			//Needs twice in a row or doesn't work
			$('html').animate({ scrollTop: '+=5px'}, 100);
			$('html').animate({ scrollTop: '+=5px'}, 100);
			//Safari doesn't listen to html so you need body
			$('body').animate({ scrollTop: '+=5px'}, 100);
			$('body').animate({ scrollTop: '+=5px'}, 100);
		});

		//Scroll contact form in footer Original code:  https://www.bootply.com/101026
		$('#accordion').on('shown.bs.collapse', function () {
			var panel = $(this).find('.in');	
			
			$('html, body').animate({
				  scrollTop: panel.offset().top
			}, 500);
			
		});
	});

	$(window).on("load", function() {
		$( "#loadingAside" ).hide();
		$("header").show("slow");

		//Fade in welcome button
		setTimeout(function(){
			$("#btn-home-container").removeClass("btn-home-hide").addClass("btn-home-show");
		},2000);	
	});

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
			
			//We need to keep the header as holding the background image to improve scrolling appearance
			setTimeout(function(){
				//$("header").css("background", "none");
			},600);
		} 
		//TODO:  Figure out how to enable this stuff
		// else {
		// 	//Entering site landing page and header should be large			
		// 	$("header").removeClass("small").addClass("large");
		// 	$(".content-area").removeClass("sm-header-margin").addClass("lg-header-margin")
		// }
	});

}(jQuery));
