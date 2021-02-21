(function ($, Drupal) {
  Drupal.behaviors.fasterweb = {
    attach: function (context, settings) {
      // Ensure that we run this code only once
      if (!Drupal.settings.fasterweb.isRunAlready) {
        Drupal.settings.fasterweb.isRunAlready = true;

        var externalScriptObject = new Object({
          Drupal,
          jQuery,
        });

        var websiteConfig = {
          debug: settings.fasterweb.debug,
          type: "Drupal 7",
          urlInclude: [],
          urlExclude: ["*logout*", "/admin_menu*", "*admin/*"],
          urlDoNotFetch: ["*logout*", "*/node/*/edit", "*/node/add"],
          elementSelector: null,
          externalScriptObject: externalScriptObject,
          url: {
            "/": {
              pageFunction: function (urlTarget, externalScriptObject) {
                homeSlider(externalScriptObject.jQuery);
                setupMapHoverClick(externalScriptObject.jQuery);
              },
            },
            "/mapa": {
              pageFunction: function (urlTarget, externalScriptObject) {
                setupMapHoverClick(externalScriptObject.jQuery);
              },
            },
            all: {
              pageFunction: function (urlTarget, externalScriptObject) {
                // console.log("All url callback: " + window.location.pathname);

                if (window.ga) {
                  window.ga("set", "dimension1", "faster");
                  window.ga("send", "pageview", urlTarget);
                }

                var Drupal = externalScriptObject.Drupal;
                if (Drupal) Drupal.attachBehaviors();
              },
            },
          },
        };

        window.faster.init(websiteConfig);
      }
    },
  };
})(jQuery, Drupal);
