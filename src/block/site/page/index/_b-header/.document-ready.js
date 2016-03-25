$(document.body).on('click.fecss', '._ih__btn-scroll', {}, function(event){
	event.preventDefault();
	
	if($.fn.fullpage) {
		$.fn.fullpage.moveTo(2);
	}
})