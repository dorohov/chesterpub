if(!device.mobile()){
	
	if($("#owl-demo").size()) {
		$("#owl-demo").owlCarousel({
			//autoPlay: 3000, //Set AutoPlay to 3 seconds
			pagination: false,
			//scrollPerPage : false,
			mouseDrag : true,
			touchDrag : true,
			transitionStyle : true,
			//navigation: true,
			items : 7,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3]
		});
	}
	
}
$("._galleryP__btn-panel").click(function(){
	//$("._galleryP__carousel").removeClass('__close').addClass('__open');
});