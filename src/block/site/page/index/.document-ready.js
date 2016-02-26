/*$('#fullpage').fullpage({
	navigation: true,
	navigationPosition: 'right',
	//scrollOverflow: true
});*/
if(device.desktop()) {
	$('#fullpage').fullpage({
		navigation: true,
		navigationPosition: 'right',
		//scrollOverflow: true
	});
}
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