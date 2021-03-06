	
	$('.scroll-container').each(function(index){
		
		var block = $(this);
		var target = $(block.attr('data-target') + ' .scroll-element').eq(0);
		var otarget = target.find('.scroll-overflow').eq(0);
		var line = block.find('.scroll-line');
		var scroll = line.find('.scroll');
		var scroll_ball;
		scroll_ball = $('<div/>', {
			class:'scroll-ball',
		});
		scroll_ball.appendTo(scroll.empty());
		var type = 0;
		
		target.css({'padding-bottom' : '30px'});
		
		block.on('init', function(event){
			event.preventDefault();
			
			console.log('.scroll-container init');
			
			if(block.hasClass('horizontal')) {
				type = 0;
				
				var l_w = line.outerWidth(true);
				var t_w = target.outerWidth(true);
				var ot_w = otarget.outerWidth(true);
				
				if((ot_w + 20) < t_w || ot_w == t_w) {
					block.css({'visibility' : 'hidden'});
				} else {
					block.css({'visibility' : 'visible'});
				}
				
				scroll.width(l_w * (t_w / ot_w));
				
				block.attr('data-ratio-h', (ot_w / l_w));
				
				scroll.draggable({
					axis:'x',
					containment : 'parent',
					scroll:false,
					drag:function(event, ui){
						target.scrollLeft(ui.position.left * block.attr('data-ratio-h'));
					},
				});
				
				target.trigger('scroll');
				
			} else if(block.hasClass('vertical')) {
				type = 1;
				
				var l_h = line.outerHeight(true);
				var t_h = target.outerHeight(true);
				var ot_h = otarget.outerHeight(true);
				
				
				if((ot_h + 20) < t_h || ot_h == t_h) {
					block.css({'visibility' : 'hidden'});
				} else {
					block.css({'visibility' : 'visible'});
				}
				
				
				scroll.height(l_h * (t_h / ot_h));
				
				block.attr('data-ratio-v', (ot_h / l_h));
				
				scroll.draggable({
					axis:'y',
					containment : 'parent',
					scroll:false,
					drag:function(event, ui){
						target.scrollTop(ui.position.top * block.attr('data-ratio-v'));
					},
				});
				
				target.trigger('scroll');
				
			}
		}).trigger('init');
		
		target.on('scroll', function(event){
			var pos = 0;
			var _pos = 0;
			if(type == 0) {
				pos = target.scrollLeft() / block.attr('data-ratio-h');
				_pos = pos * 100 / (line.outerWidth(true) - scroll.outerWidth(true));
				
				scroll.css({'left':pos});
				scroll_ball.css({'left':_pos + '%'});
			} else if(type == 1) {
				pos = target.scrollTop() / block.attr('data-ratio-v');
				_pos = pos * 100 / (line.outerHeight(true) - scroll.outerHeight(true));
				
				scroll.css({'top':pos});
				scroll_ball.css({'top':_pos + '%'});
			}
		});
		
	});

$('.modal').on('shown.bs.modal', function (event) {
	//alert(2);
	$('.scroll-container').trigger('init');
});