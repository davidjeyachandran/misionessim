jQuery(window).scroll(function() {
	jQuery('#block-customtabs-2 .tab-content > ul.row > .col-sm-4').each(function(){
	var imagePos = jQuery(this).offset().top; 
	var topOfWindow = jQuery(window).scrollTop();
		if (imagePos < topOfWindow+800) {
			jQuery(this).addClass("animated fadeInUp ");
		}
	});
});