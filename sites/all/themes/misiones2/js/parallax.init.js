(function ($) {
	function addImageParallax(selector, path, filename, width, height)
	{
		var selector = $(selector);

		selector.addClass('parallax_section');
		selector.attr('data-type-media', 'image');
		selector.wrapInner('<div class="container parallax_content"></div>');
		selector.append('<div class="parallax_inner"><img class="parallax_media" src="'+path+filename+'" data-base-width="'+width+'" data-base-height="'+height+'"/></div>');

		selector.tmMediaParallax();
	}

	$(window).load(function(){
		addImageParallax('#tmhtmlcontent_topColumn','images/','img-1.jpg','2050','532');
		addImageParallax('#tmhtmlcontent_home','images/','img-2.jpg','2050','683');

	});
})(jQuery);