var h_window = $(window).height(), 
 	w_window = $(window).width();

var h_footer = $('.footer-block').outerHeight(true),
 	h_404 = h_window - h_footer - 50;
/*if (w_window < 1025){
	$(".error-page__section ._ps__inside-line").css("height", h_404);
} else {
	$(".error-page__section").removeAttr("style");
};*/
$(".error-page__section ._ps__inside-line").css("height", h_404);