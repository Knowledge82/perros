$(document).ready(function() {



	$("#portfolio_grid").mixItUp();

	$(".s_portfolio .section_content li").click(function() {
		$(".s_portfolio .section_content li").removeClass("active");
		$(this).addClass("active");
	});

	$(".popup").magnificPopup({type:"image"});
	$(".popup_content").magnificPopup({type:"inline"});

	$(".top_descr h1").animated("fadeInDown", "fadeOutUp");
	$(".top_descr p").animated("fadeInUp", "fadeInUp");
	$(".section_header").animated("fadeInUp", "fadeOutDown");

	$(".animation_left").animated("fadeInLeft", "fadeOut");
	$(".animation_right").animated("fadeInRight", "fadeOut");
	$(".animation_photo").animated("flipInY", "flipOutY");

	$(".left .resume_item").animated("fadeInLeft", "fadeOutLeft");
	$(".right .resume_item").animated("fadeInRight", "fadeOutRight");

	function heightDetect() {
	$(".main_head").css("height", $(window).height());
	$(".top_wrapper").css("height",$(window).height());
	};
	heightDetect();
	$(window).resize(function() {
		heightDetect();
	});

	$(".toggle_mnu").click(function() {
  		$(".sandwich").toggleClass("active");
	});

	$(".top_mnu li").click(function() {
		$(".top_mnu").fadeOut(600);
		$(".sandwich").toggleClass("active");
		$(".top_descr").removeClass("descr_opacity");
	});

	$(".toggle_mnu").click(function() {
		if($(".top_mnu").is(":visible")) {
			$(".top_mnu").fadeOut(600);
			$(".top_mnu li").addClass("fadeInUp animated");
			$(".top_descr").removeClass("descr_opacity");
		}
		else {
			$(".top_mnu").fadeIn(600);
			$(".top_mnu li").addClass("fadeInUp animated");
			$(".top_descr").addClass("descr_opacity");
		};
	});

$(".portfolio_item").each(function(i) {
		$(this).find("a").attr("href", "#work_" + i);
		$(this).find(".portfolio_descr").attr("id", "work_" + i);	
	});

$("input,select,textarea").jqBootstrapValidation();

$(".top_mnu a").mPageScroll2id();

});
$(window).load(function() { 
	$(".loader_inner").fadeOut(); 
	$(".loader").delay(400).fadeOut("slow"); 
});