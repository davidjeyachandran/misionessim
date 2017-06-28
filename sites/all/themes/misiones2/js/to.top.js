jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
		jQuery('#toTop').fadeIn();
    } else {
        jQuery('#toTop').fadeOut();
	}
});

// scroll body to 0px on click
jQuery('#toTop').click(function () {
	jQuery('body,html').stop(false, false).animate({
        scrollTop: 0
    }, 800);
    
	return false;
});