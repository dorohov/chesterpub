$('._ibm__left-col').hover(
	function(){
		$('._ibm__left-bg').addClass('bg-hover')
	},
	function(){
		$('._ibm__left-bg').removeClass('bg-hover')	
	}
);
$('._ibm__right-col').hover(
	function(){
		$('._ibm__right-bg').addClass('bg-hover')
	},
	function(){
		$('._ibm__right-bg').removeClass('bg-hover')	
	}
);


$('._azbn_contact-form-block, ._azbn_contact-get-form').on('click.not-_azbn_contact-form-block', function(event){
	event.preventDefault();
	event.stopPropagation();
});

$('body').on('click.not-_azbn_contact-form-block', function(event){
	//event.preventDefault();
	
	$(this).find('._azbn_contact-form-block:visible .btn-close-xs._azbn_cancel').trigger('click');
	
})