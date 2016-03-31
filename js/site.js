$(document).ready(function() {
	
	
	
	$('._azbn__galleryP__lock-btn').on('click', function(event){
		event.preventDefault();
		
		var btn = $(this);
		btn.closest('._galleryP__lock').css({
			'opacity':0,
			'transition':'all 0.4s ease',
		}).hide('fast').empty().remove();
		
		$('button._galleryP__btn-panel').trigger('click');
	});
	setTimeout(function(){
		$('._azbn__galleryP__lock-btn').trigger('click');
	}, 3000);
	
	$(document.body).on('click.fecss', 'button._galleryP__btn-panel', function(event){
		event.preventDefault();
		
		$(this).closest('._galleryP__carousel').toggleClass('__close __open');
	});
	
	
	$('._azbn_gallery-item').on('click.fecss', function(event){
		event.preventDefault();
		
		var btn = $(this);
		var img = btn.find('img').attr('src');
		
		//btn.closest('.owl-wrapper').find('.owl-item').removeClass('active');
		//btn.closest('.owl-item').addClass('active');
		$('.item._azbn_gallery-item').removeClass('active');
		btn.addClass('active');
		
		$('._azbn_gallery-full-image').css({
			'background-image':'url(' + img + ')',
			'background-position' : 'center center',
			'background-size' : 'cover',
			'transition':'all 0.4s ease',
		});
		
	});
	
	
	$(document.body).on('click.fecss', '._azbn_click-on-document-ready', function(event){
		event.preventDefault();
		
		//var mml = $('._azbn_menu_main_list');
		//mml.fadeIn('fast').css({'display':'flex'});
		
		if($('._azbn_jscart-step[data-jscart-step="0"]').is(':visible')) {
			$('._azbn_jscart-step[data-jscart-step="0"]').fadeOut('fast');
		} else {
			$('._azbn_jscart-step[data-jscart-step="0"]').fadeIn('fast').css({'display':'flex',});
			$('._azbn_jscart-step[data-jscart-step="0"]').find('.scroll-container').trigger('init');
		}
		
		
	});//.eq(0).trigger('click');
	
	
	$(function(){
		
		$(document.body).on('submit', 'form.send-call-req', function(event){
			event.preventDefault();
			
			var f = $(this);
			
			var order = {
					action : 'azbnajax_call',
					method : 'call/create',
					type:'json',
					phone : f.find('input[name="phone"]').val(),
				};
				
				//order = JSON.stringify(order);
				
				$.post('/wp-admin/admin-ajax.php', order, function(data){
					f.find('input[name="phone"]').val('');
				});
		});
		
	});
	
	
	
	$(document.body).on('click.fecss', '._azbn_backUp', function(event){
		event.preventDefault();
		
		//$.fn.fullpage.moveSectionUp();
		$.fn.fullpage.moveTo(1);
	})
	
	
	
	$(function(){
		//._azbn_gallery-ctrl-left
		//._azbn_gallery-ctrl-right
		
		//$('#owl-demo').owlCarousel();
		var owl = $('#owl-demo.owl-carousel');//.data('owlCarousel');
		
		if(owl.size()) {
			
			$(document.body).on('click.fecss', '._azbn_gallery-ctrl-left', function(event){
				event.preventDefault();
				
				//owl.prev();
				
				var prev = $('.item._azbn_gallery-item.active').parent().prev('.owl-item');
				if(prev.size()) {
					prev.find('.item._azbn_gallery-item').trigger('click.fecss');
				} else {
					$('.owl-item').eq(-1).find('.item._azbn_gallery-item').trigger('click.fecss');
				}
			});
			
			$(document.body).on('click.fecss', '._azbn_gallery-ctrl-right', function(event){
				event.preventDefault();
				
				//owl.next();
				
				var next = $('.item._azbn_gallery-item.active').parent().next('.owl-item');
				if(next.size()) {
					next.find('.item._azbn_gallery-item').trigger('click.fecss');
				} else {
					$('.owl-item').eq(0).find('.item._azbn_gallery-item').trigger('click.fecss');
				}
			});
			
			$(document.body).on('fecss.keydown',		null, {}, function(event, _event) {
				console.log('body trigger:fecss.keydown: ' + JSON.stringify(_event));
				
				if(_event.key == 37) {
					
					$('._azbn_gallery-ctrl-left').trigger('click.fecss');
					
				} else if(_event.key == 39) {
					
					$('._azbn_gallery-ctrl-right').trigger('click.fecss');
					
				}
			});
			
			$(document.body).bind('keydown', function(event){
				event.stopPropagation();
				
				$(document.body).trigger('fecss.keydown', [{
					alt : event.altKey,
					ctrl : event.ctrlKey,
					shift : event.shiftKey,
					meta : event.metaKey,
					key : event.which,
					liter : String.fromCharCode(event.which),
				}]);
			});
		}
		
	});
	
	
	
	$('._azbn_productcat-switch a').on('click', function(event){
		event.preventDefault();
		
		var btn = $(this);
		var target = btn.attr('href');
		
		if(btn.parent().hasClass('go-to-cat')) {
			$('._azbn_productcat-item_list').hide();
			$(target + '._azbn_productcat-item_list').fadeIn('fast').find('.scroll-container').trigger('init');
			btn.closest('ul').find('._azbn_productcat-switch').removeClass('active');
			btn.parent().addClass('active');
			//$('._azbn_click-on-document-ready span').html(btn.html());
		} else {
			location.href = target;
		}
		
		//$('._ps__inside-line._sgg__inside-line._menuP__modal-content').closest('.menu-modal__section').fadeOut();
		
	}).eq(0).trigger('click');
	
	
	$('._azbn_jscart-step-next').on('click', function(event){
		event.preventDefault();
		
		var btn = $(this);
		var step = btn.attr('data-jscart-step');
		$('._azbn_jscart-step').hide();
		$('._azbn_jscart-step[data-jscart-step="' + step + '"]').fadeIn('fast');
		
	});
	
	
	$('._azbn_jscart-step-next[data-jscart-step="1"]').on('click', function(event){
		event.preventDefault();
		
		$('.fecss-jscart').trigger('rebuild-editor');
		
	});
	
	
	$('._azbn_jscart-step-next[data-jscart-step="1"], ._azbn_jscart-step-next[data-jscart-step="2"]').on('click', function(event){
		event.preventDefault();
		
		$('body').addClass('open-dev');
		
	});
	
	$('._azbn_jscart-step-next[data-jscart-step="0"], ._azbn_jscart-step-next[data-jscart-step="3"]').on('click', function(event){
		event.preventDefault();
		
		$('body').removeClass('open-dev');
		
	});
	
	
	$('._azbn_jscart-step').hide();
	//$('._azbn_jscart-step[data-jscart-step="0"]').fadeIn('fast').css({'display':'flex',});
	
	//$('._azbn_click-on-document-ready').eq(0).trigger('click');_azbn_menu_main_list
	
	$('._menuP__item.jscart-item').hover(function(){
			$(this).addClass('active');
		}, function(){
			$(this).removeClass('active');
		}
	);
	
	
	
	
	
	
	$('._azbn_contact-form-block').hide();
	$('._azbn_contact-form-block ._azbn_cancel').on('click', function(event){
		event.preventDefault();
		
		$('body').removeClass('open-rev');
		$('._azbn_contact-form-block').fadeOut('fast');
	});
	$('._azbn_contact-get-form').on('click', function(event){
		event.preventDefault();
		
		$('body').toggleClass('open-rev');
		if($('._azbn_contact-form-block').is(':hidden')) {
			$('._azbn_contact-form-block').fadeIn('fast').css({'display':'flex'});
		} else {
			$('._azbn_contact-form-block').fadeOut('fast');
		}
		
	});
	
	
	
	
	
	
	$('._azbn_vacancy-form-cont').hide();
	$('._azbn_vacancy-form-cont ._azbn_cancel').on('click', function(event){
		event.preventDefault();
		
		$('body').removeClass('open-rev');
		$('._azbn_vacancy-form-cont').fadeOut('fast');
	});
	$('._azbn_vacancy-get-form').on('click', function(event){
		event.preventDefault();
		
		$('body').toggleClass('open-rev');
		if($('._azbn_vacancy-form-cont').is(':hidden')) {
			$('._azbn_vacancy-form-cont').fadeIn('fast').css({'display':'flex'});
		} else {
			$('._azbn_vacancy-form-cont').fadeOut('fast');
		}
		
	});

	
	$(function(){
		
		$(document.body).on('submit', 'form.vacancy-form', function(event){
			event.preventDefault();
			
			var f = $(this);
			
			var order = $.extend(
				{
					
				},
				{
					action : 'azbnajax_call',
					method : 'vacancy/create',
					type:'json',
				},
				f.serialize()
			);
				
				//order = JSON.stringify(order);
				
				$.post('/wp-admin/admin-ajax.php', order, function(data){
					f.trigger('reset');
				});
		});
		
	});
	
	
	
	$('.fecss-jscart').each(function(){
		
		var block = $(this);
		
		var Cart = new jsCart();
		
		block.on('rebuild', function(event){
			block.find('.jscart-item').each(function(index){
				
				var item = $(this);
				
				var product = item.attr('data-jscart-product');
				var taste = item.attr('data-jscart-taste');
				//var cost = item.attr('data-jscart-cost');
				//var amount = item.attr('data-jscart-amount');
				
				var c_item = Cart.getItem(product, taste);
				item.find('input.jscart-item-amount').attr('value', parseInt(c_item.amount));
				item.find('div.jscart-item-amount, span.jscart-item-amount, a.jscart-item-amount').html(parseInt(c_item.amount));
				
				var result = Cart.calculate();
				block.attr('data-jscart-sum', result.sum).find('.jscart-sum').html(result.sum);
				block.find('.jscart-product').html(result.product);
				block.find('.jscart-amount').html(result.amount);
				
				var amount_o = result.amount % 10;
				var amount_o_str = '';
				switch(amount_o) {
					
					case 1:{
						amount_o_str = 'о';
					}
					break;
					
					case 2:
					case 3:
					case 4:{
						amount_o_str = 'а';
					}
					break;
					
					default:{
						amount_o_str = '';
					}
				}
				
				if(result.amount > 9 && result.amount < 21) {
					amount_o_str = '';
				}
				
				block.find('.jscart-suffix').html(amount_o_str);
			});
			
			block.trigger('rebuild-editor');
		});
		block.trigger('rebuild');
		
		block.on('rebuild-editor', function(event){
			
			var tpl = $('._azbn-jscart-editor-item-tpl').eq(0).html();
			$('._azbn_jscart-edit-order').empty();
			Cart.saveCart(function(profile, cart){
				
				if(cart != null) {
					
				} else {
					cart = {};
				}
				
				for(var p_key in cart) {
					var product = cart[p_key];
					for(var t_key in product) {
						var taste = product[t_key];
						//result.product++;
						//result.amount = result.amount + taste.amount;
						//result.sum = result.sum + (taste.amount * taste.cost);
						
						var p = {
							id : p_key,
							title : $('._azbn_productcat-item_list .jscart-item[data-jscart-product="' + p_key + '"]').attr('data-jscart-title'),
							amount : taste.amount,
							cost : taste.cost,
						};
						
						var html = tpl;
						
						for(var _k in p) {
							html = html.replace(new RegExp('%' + _k + '%','ig'), p[_k]);
						}
						
						$('._azbn_jscart-edit-order').append(html);
						
					}
				}
				
			});
			
		});
		//block.trigger('rebuild-editor');
		
		block.on('clear', function(event){
			Cart.clear();
			block.trigger('rebuild');
		});
		
		block.on('create-order', function(event){
			
			var profile = Cart.getProfile({});
			
			if(profile) {
				
			} else {
				profile = {};
			}
			profile.phone = $('._azbn_jscart-order-phone').eq(0).val();
			Cart.setProfile(profile);
			
			Cart.saveCart(function(profile, cart){
				
				var order = {
					action : 'azbnajax_call',
					method : 'order/create',
					type:'json',
					profile : profile,
					cart : cart,
				};
				
				//order = JSON.stringify(order);
				
				$.post('/wp-admin/admin-ajax.php', order, function(data){
					
					var neworder = JSON.parse(data);
					Cart.saveOrder(neworder);
					
					//Cart.clear();
					//block.trigger('rebuild');
					
					block.trigger('clear');
				});
				
			})
		});
		
		
		$(document.body).on('mousemove', '.editDev__item', function(event){
			event.preventDefault();
			
			$(this).addClass('active');
		});
		
		$(document.body).on('mouseleave', '.editDev__item', function(event){
			event.preventDefault();
			
			$(this).removeClass('active');
		});
		
		
		$(document.body).on('click.jscart', '.jscart-item .jscart-add-btn', function(event){
			event.preventDefault();
			
			var btn = $(this);
			
			var product = btn.attr('data-jscart-product');
			var taste = btn.attr('data-jscart-taste');
			var cost = btn.attr('data-jscart-cost');
			var amount = btn.attr('data-jscart-amount');
			
			if(product == '' || typeof product == 'underfined' || product == null) {
				product = btn.closest('.jscart-item').attr('data-jscart-product');
			}
			if(taste == '' || typeof taste == 'underfined' || taste == null) {
				taste = btn.closest('.jscart-item').attr('data-jscart-taste');
			}
			if(cost == '' || typeof cost == 'underfined' || cost == null) {
				cost = btn.closest('.jscart-item').attr('data-jscart-cost');
			}
			if(amount == '' || typeof amount == 'underfined' || amount == null || amount == 0) {
				amount = btn.closest('.jscart-item').attr('data-jscart-amount');
			}
			
			Cart.add(product, taste, cost, parseInt(amount));
			console.log('product ' + product + ' added to cart');
			block.trigger('rebuild');
		});
		
		$(document.body).on('click.jscart', '.jscart-item .jscart-remove-btn', function(event){
			event.preventDefault();
			
			var btn = $(this);
			
			var product = btn.attr('data-jscart-product');
			var taste = btn.attr('data-jscart-taste');
			var cost = btn.attr('data-jscart-cost');
			var amount = btn.attr('data-jscart-amount');
			
			if(product == '' || typeof product == 'underfined' || product == null) {
				product = btn.closest('.jscart-item').attr('data-jscart-product');
			}
			if(taste == '' || typeof taste == 'underfined' || taste == null) {
				taste = btn.closest('.jscart-item').attr('data-jscart-taste');
			}
			if(cost == '' || typeof cost == 'underfined' || cost == null) {
				cost = btn.closest('.jscart-item').attr('data-jscart-cost');
			}
			if(amount == '' || typeof amount == 'underfined' || amount == null || amount == 0) {
				amount = btn.closest('.jscart-item').attr('data-jscart-amount');
			}
			
			Cart.remove(product, taste, parseInt(amount));
			console.log('product ' + product + ' removed from cart');
			block.trigger('rebuild');
		});
		
		$(document.body).on('click.jscart', '.jscart-item .jscart-remove-pos', function(event){
			event.preventDefault();
			
			var btn = $(this);
			
			var product = btn.attr('data-jscart-product');
			var taste = btn.attr('data-jscart-taste');
			
			if(product == '' || typeof product == 'underfined' || product == null) {
				product = btn.closest('.jscart-item').attr('data-jscart-product');
			}
			if(taste == '' || typeof taste == 'underfined' || taste == null) {
				taste = btn.closest('.jscart-item').attr('data-jscart-taste');
			}
			
			Cart.remove(product, taste, 99999999);
			console.log('product ' + product + ' removed from cart');
			block.trigger('rebuild');
		});
		
		$(document.body).on('click.jscart', '.jscart-clear-btn', function(event){
			event.preventDefault();
			block.trigger('clear');
		});
		
		$(document.body).on('click.jscart', '.jscart-create-order', function(event){
			event.preventDefault();
			block.trigger('create-order');
		});
		
	});
	
	
	
	
	
	
	
	
	$(function(){
		var pl = $('div.page-loader.full-screen.chester-style.active');
		var b = $('.blind', pl).eq(0);
		
		if(b.size()) {
			
			var pos = 0;
			
			b.css({'bottom' : pos + '%'}).attr('data-pos', pos);
			
			var intr = setInterval(function() {
				
				var check = Math.random();
				if(check > 0.5 && pos < 100) {
					pos++;
					
					if(b.data('fast-page-loading')) {
						pos = pos + 6;
					}
					
					var h = 100 + (pos);
					//var o = (100 - (pos / 5.5)) / 100;
					
					b.css({'bottom' : pos + '%', 'height' : h + '%', 'width' : h + '%', 'left' : - (pos / 2) + '%'}).attr('data-pos', pos);//, 'height' : h + '%'
				} else if(pos > 99) {
					clearInterval(intr);
					$('div.page-loader.full-screen.chester-style')
						.data('counter-can-close-it', true)
						.trigger('fecss.can-close-it');
				}
				
			}, 55);
		}
	});
	
	
	
	
	
	$('._azbn_news-archive-open').on('click', function(event){
		event.preventDefault();
		
		var btn = $(this);
		$('._azbn_news-archive').fadeIn('fast');
		
	});
	
	$('._azbn_news-archive-close').on('click', function(event){
		event.preventDefault();
		
		var btn = $(this);
		$('._azbn_news-archive').fadeOut('fast');
		
	}).eq(0).trigger('click');
	
	
	$(window).on('resize', function(event){
		
		
		if(device.mobile()) {
			
			$('._azbn_news-archive-list').css({width : 'auto'});
			
			$('._azbn_news-archive .scroll-container').removeClass('horizontal bottom').addClass('vertical right').trigger('init');
			
		} else {
			
			$('._azbn_news-archive-list').css({width : 'auto'});
			
			var _azbn_news_archive_list_w = 0;
			$('._azbn_news-archive-list ._azbn_news-archive-item').each(function(){
				_azbn_news_archive_list_w = _azbn_news_archive_list_w + $(this).outerWidth(true);
			});
			$('._azbn_news-archive-list').css({width : _azbn_news_archive_list_w});
			
			$('._azbn_news-archive .scroll-container').removeClass('vertical right').addClass('horizontal bottom').trigger('init');
		}
		
		/*
		$(function(){
			
			var sc = $('.menu-page__section .scroll-hide.scroll-recalc');
			
			sc.each(function(index){
				var el = $(this);
				var p = el.parent();
				
				el.css({'height': $(window).height() * 0.53});
				$('.scroll-container[data-target="#' + el.attr('id') + '"]').trigger('init');
				
			});
			
		});
		*/
		
		//$('.scroll-container').trigger('init');
		
	});
	$(window).trigger('resize');
	
	
});