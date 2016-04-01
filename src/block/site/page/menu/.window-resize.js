if(device.tablet()){
	$('._menuP__navbar').appendTo($("._mp-modal__flex"));
	$('._menuP__delivery.step1').appendTo($('._menuP__panel-bottom .sm-panel'));
	$('._menuP__delivery.step2').appendTo($('._menuP__panel-bottom .sm-panel'));
	$('._menuP__delivery.editDev').appendTo($('._menuP__panel-bottom .sm-panel'));
	$('.editDev__price').each(function(){
		var el = $(this);
		el.appendTo(el.closest('.editDev__item').find('.editDev__item-cost'))
	}); 
}
if(device.mobile()){
	$('._menuP__navbar').appendTo($("._mp-modal__flex"));
	//$('._menuP__delivery.step1').appendTo($('._menuP__panel-bottom .sm-panel'));
	//$('._menuP__delivery.step2').appendTo($('._menuP__panel-bottom .sm-panel'));
	$('._menuP__delivery.step2').appendTo($('#modal-bay ._panel-bay-modal__inner'));
	$('._menuP__delivery.editDev').appendTo($('#modal-bay-edit ._panel-bay-modal__inner'));
} 