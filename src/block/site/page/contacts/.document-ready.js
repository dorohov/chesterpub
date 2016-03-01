$("[data-toggle-nav]").click(function() {
	var toggle_el = $(this).data("toggle-nav"); 
	$(toggle_el).toggleClass("open-menu-navbar"); 
});
$(".editDev__item").click(function() {
	$(this).toggleClass("active"); 
});