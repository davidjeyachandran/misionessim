jQuery(document).ready(function(){

	if (typeof(homeslider_speed) == 'undefined')
		homeslider_speed = 500;
	if (typeof(homeslider_pause) == 'undefined')
		homeslider_pause = 4000;
	if (typeof(homeslider_loop) == 'undefined')
		homeslider_loop = true;
    if (typeof(homeslider_width) == 'undefined')
        homeslider_width = 1920;
	
	var tl = new TimelineMax();
	
	tl.from(".homeslider-description h2", 0.3,{left:-100, autoAlpha:0})
	.from(".homeslider-description h3", 0.3,{right:-100, autoAlpha:0});


	if (!!jQuery.prototype.bxSlider)
		jQuery('#homeslider').bxSlider({
			mode:'fade',
			useCSS: false,
			maxSlides: 1,
			slideWidth: homeslider_width,
			infiniteLoop: homeslider_loop,
			hideControlOnEnd: true,
			pager: true,
			autoHover: true,
			autoControls: true,
			auto: homeslider_loop,
			speed: parseInt(homeslider_speed),
			pause: homeslider_pause,
			controls: false,
			startText:'',
			stopText:'',
			pagerCustom: '',
			onSliderLoad:function(){tl.play()},
			onSlideBefore:function(){tl.restart()},
			onSlideAfter:function(){}
		});

    jQuery('.homeslider-description').click(function () {
        window.location.href = jQuery(this).prev('a').prop('href');
    });
	

});