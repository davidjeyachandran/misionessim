jQuery(document).ready(function(){
	jQuery("#block-views-block-view-1-block-1 .views-view-grid > .row > .col-sm-4 .views-field-title a").wrapInner("<div><h2></h2></div>");
	jQuery("#block-views-block-view-1-block-1 .views-view-grid > .row > .col-sm-4 .views-field-title a > div").addClass("item-html");

    //Add Inactive Class To All Accordion Headers
  $('.accordion-header').toggleClass('inactive-header');
  
  //Set The Accordion Content Width
  var contentwidth = $('.accordion-header').width();
  $('.accordion-content').css({'width' : contentwidth });
  
  //Open The First Accordion Section When Page Loads
  $('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
  $('.accordion-content').first().slideDown().toggleClass('open-content');
  
  // The Accordion Effect
  $('.accordion-header').click(function () {
    if($(this).is('.inactive-header')) {
      $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
      $(this).toggleClass('active-header').toggleClass('inactive-header');
      $(this).next().slideToggle().toggleClass('open-content');
    }
    
    else {
      $(this).toggleClass('active-header').toggleClass('inactive-header');
      $(this).next().slideToggle().toggleClass('open-content');
    }
  });

});

jQuery(window).scroll(function() {
	jQuery('#block-views-block-view-1-block-1 .views-view-grid > .row > .col-sm-4').each(function(){
	var imagePos = jQuery(this).offset().top; 
	var topOfWindow = jQuery(window).scrollTop();
		if (imagePos < topOfWindow+650) {
			jQuery(this).addClass("animated fadeInUp ");
		}
	});
});
