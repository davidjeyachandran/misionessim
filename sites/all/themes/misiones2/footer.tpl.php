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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12299775-6', 'auto');
  ga('send', 'pageview');
</script>


<script async src="https://fasterweb.io/faster.js"></script>
<style>
.zvisible,
.zhidden {
  overflow: hidden;
  /* This container should not have padding, borders, etc. */
}
.zvisible {
  visibility: visible;
  opacity: 1;
  transition: opacity 2s linear;
}
.zhidden {
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s 2s, opacity 2s linear;
}

.faster {
  /*background-color: lime;*/
  cursor: url('https://fasterweb.io/img/cursor-rocket.png'), auto;
}
</style>

<script>
window.addEventListener('load', function () {
  const websiteConfig = {
    "urlInclude": [],
    "urlExclude" : ["/admin/*", "*.txt", "*.doc", "*.docx", "*.pdf", "*.ppt", "*.pptx", "*.mp3", "*.mp4", "*.avi", "*.jpg", "*.jpeg"],
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

  window.faster(websiteConfig, jQuery, ga);

});
</script>
