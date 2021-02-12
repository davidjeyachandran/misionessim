function setupMapHoverClick($) {
  var getSiblings = function (elem) {
    // Setup siblings array and get the first sibling
    var siblings = [];
    var sibling = elem.parentNode.firstChild;
    // Loop through each sibling and push to the array
    while (sibling) {
      if (sibling.nodeType === 1 && sibling !== elem) {
        siblings.push(sibling);
      }
      sibling = sibling.nextSibling;
    }
    return siblings;
  };

  var setSiblings = function (element, color) {
    getSiblings(element).forEach(function (i) {
      i.setAttribute("fill", color);
    });
  };

  var country = $("path");
  country.hover(
    function (e) {
      this.setAttribute("fill", "#BD2919");
      setSiblings(this, "#BD2919");
    },
    function (e) {
      this.setAttribute("fill", "black");
      setSiblings(this, "black");
    }
  );
}

function homeSlider(jQuery) {
  if (typeof homeslider_speed == "undefined") homeslider_speed = 500;
  if (typeof homeslider_pause == "undefined") homeslider_pause = 4000;
  if (typeof homeslider_loop == "undefined") homeslider_loop = true;
  if (typeof homeslider_width == "undefined") homeslider_width = 1920;

  var tl = new TimelineMax();

  tl.from(".homeslider-description h2", 0.3, {
    left: -100,
    autoAlpha: 0,
  }).from(".homeslider-description h3", 0.3, { right: -100, autoAlpha: 0 });

  if (!!jQuery.prototype.bxSlider)
    jQuery("#homeslider").bxSlider({
      mode: "fade",
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
      startText: "",
      stopText: "",
      pagerCustom: "",
      onSliderLoad: function () {
        tl.play();
      },
      onSlideBefore: function () {
        tl.restart();
      },
      onSlideAfter: function () {},
    });

  jQuery(".homeslider-description").click(function () {
    window.location.href = jQuery(this).prev("a").prop("href");
  });
}
