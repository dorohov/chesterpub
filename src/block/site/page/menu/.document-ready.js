$("[data-toggle-nav]").click(function() {
	var toggle_el = $(this).data("toggle-nav"); 
	$(toggle_el).toggleClass("open-menu-navbar"); 
});
$(".editDev__item").click(function() {
	$(this).toggleClass("active"); 
});


$('.modal').on('shown.bs.modal', function (event) {
	$('.fecss-jscart').trigger('rebuild');
});

$(document.body).on('click.fecss', '._menuP__panel-bay-xs .btn-edit-card-xs', {}, function(event){
	event.preventDefault();
	
	$('.fecss-jscart').trigger('rebuild', [{rebuild_editor : true,}]);
	
})