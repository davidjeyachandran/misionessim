<footer id="footer">

  <div class="middle-footer-wrapper">
    <div class="container">
      <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
        <section id="social_block">
          <ul>
            <li class="facebook">
              <a title="Facebook" href="https://www.facebook.com/SIMLatinoamerica/" target="_blank">
                <i class="fa fa-facebook-f fa-lg" aria-hidden="true"></i>
              </a>
            </li>
            <li class="instagram">
              <a title="Instagram" href="https://www.instagram.com/simlatinoamerica" target="_blank">
                <i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
              </a>
            </li>
            <li class="youtube">
              <a title="YouTube" href="https://www.youtube.com/user/VamosSIM" target="_blank">
                <i class="fa fa-youtube fa-lg" aria-hidden="true"></i>
              </a>
            </li>
            <li class="email">
              <a title="Email" href="/contact" target="_blank">
                <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </section>
      </div>
    </div>
  </div>
  <div class="bottom-footer-wrapper">
    <div class="container">
      <div class="bottom-footer">

      </div>
    </div>
  </div>
</footer>

<script>
window.onload = function() {



};




</script>

<?php if(!$logged_in): ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12299775-6', 'auto');

</script>

<script async src="https://fasterweb.io/faster.js"></script>
<script async type="text/javascript" src="https://fasterweb.io/js/ab.js"></script>
<link type="text/css" rel="stylesheet" href="https://fasterweb.io/faster.css" />

<script>
window.addEventListener('load', function () {

  const websiteConfig = {
    "urlInclude": [],
    "urlExclude" : ["/admin/*", "*.txt", "*.doc", "*.docx", "*.pdf", "*.ppt", "*.pptx", "*.mp3", "*.mp4", "*.avi"],
    "elementSelector": null,
    "url": {
      "/": {
        "prefetch" : ["/quienessomos","/recursos", "/la-revista"],
        "pageFunction": function(urlTarget, jQuery, ga){
          homeSlider(jQuery);
          lazyLoad();
        }
      },
      "/quienessomos": {
        "prefetch" : ["/", "/recursos-movilicemos"],
        "pageFunction": function(){}
      },
      "/recursos-movilicemos": {
        "prefetch" : ["/", "/quienessomos", "/la-revista"],
        "pageFunction": function(){}
      },
      "/la-revista": {
        "prefetch" : ["/", "/cursovamos"],
        "pageFunction": function(){}
      },
      "/cursovamos": {
        "prefetch" : ["/", "/recursos"],
        "pageFunction": function(urlTarget){console.log('urlTarget: ' + urlTarget)}
      },
      "all": {
        "prefetch" : ["/"],
        "pageFunction": function(urlTarget, jQuery, ga){
          ga('set', 'dimension1','faster');
          ga('send', 'pageview', urlTarget, {location: window.location.href});
          console.log('All url callback: ' + window.location.pathname);
        }
      }
    }
  }

  //AB Test - Faster and Control
  var myAbTest = ABTest({
    name: "Test_Faster",
    customVarSlot: 1,
    variations: {
        faster: function () {
          console.log('AB: Faster');
          ga('set', 'dimension1','faster');
          ga('send', 'pageview');
          window.faster(websiteConfig, jQuery, ga);
        },
        control: function () {
          console.log('AB: Control');
          ga('set', 'dimension1','control');
          ga('send', 'pageview')
        }
    }
  });

});

<?php else: ?>
No Google Analytics Tracking when logged in.
<?php endif; ?>

</script>
