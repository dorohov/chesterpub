
	$('.page-loader .close-loader').on('click',function(event){
		event.preventDefault();
		$('.page-loader').removeClass('active');
	});
	$(window).load(function(event){
		var bl = $('div.page-loader.full-screen.chester-style .blind');
		while(parseInt(bl.attr('data-pos')) < 100) {}
		$('.page-loader').removeClass('active');
	});
