$(function() {
	var menulink = $(".menu-link");
	var menu = $("menu");
	var close = $(".close-btn");
	var navLink = $("li a");

	menulink.click(function() {
		menu.toggleClass("active-menu");
	});
	close.click(function() {
		menu.toggleClass("active-menu");
	});

	navLink.on("click", function(event) {
		event.preventDefault();
		var target = $(this).attr("href");
		console.log(target);
		var top = $(target).offset().top;
		console.log(top);
		$("html, body").animate({ scrollTop: top }, 500);
	});
});
