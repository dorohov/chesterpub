$("[data-toggle-nav]").click(function() {
	var toggle_el = $(this).data("toggle-nav"); 
	$(toggle_el).toggleClass("open-menu-navbar");
});