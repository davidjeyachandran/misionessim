jQuery(document).ready(function(){
	jQuery("#block-views-block-view-1-block-1 .views-view-grid > .row > .col-sm-4 .views-field-title a").wrapInner("<div><h2></h2></div>");
	jQuery("#block-views-block-view-1-block-1 .views-view-grid > .row > .col-sm-4 .views-field-title a > div").addClass("item-html");
})

jQuery(window).scroll(function() {
	jQuery('#block-views-block-view-1-block-1 .views-view-grid > .row > .col-sm-4').each(function(){
	var imagePos = jQuery(this).offset().top; 
	var topOfWindow = jQuery(window).scrollTop();
		if (imagePos < topOfWindow+650) {
			jQuery(this).addClass("animated fadeInUp ");
		}
	});
});
