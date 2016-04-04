$(function(){
	//stick in the fixed 100% height behind the navbar but don't wrap it
	//$('#slide-nav').after($('<div id="navbar-height-col"></div>'));  

	// Enter your ids or classes
	var toggler = '.navbar-toggle';
	var pagewrapper = '#wrapper';
	var navigationwrapper = '.navbar-header';

	$("#slide-nav").on("click", toggler, function (e) {

		var selected = $(this).hasClass('slide-active');
		
		if(selected) {
			$('#slidemenu').hide();
		}
		else
			$('#slidemenu').show();
		
		$(this).toggleClass('slide-active', !selected);
		$('#slidemenu').toggleClass('slide-active');


		$('#wrapper, .navbar, body, .navbar-header').toggleClass('slide-active');


	});


	var selected = '#slidemenu, #wrapper, body, .navbar, .navbar-header';


	$(window).on("resize", function () {

		if ($(window).width() > 1000 && $('.navbar-toggle').is(':hidden')) {
			$(selected).removeClass('slide-active');
		}

	});

});
