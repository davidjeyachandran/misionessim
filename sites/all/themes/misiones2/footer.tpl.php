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

<script src="faster-combined.js"></script>

<script>
  const websiteConfig = {
    "urlInclude": [],
    "urlExclude" : ["/admin/*"],
    "elementSelector": "#content",
    "url": {
      "/": {
        "prefetch" : ["/quienessomos.html","/recursos-movilicemos.html"],
        "loadFunction": function(){console.log('index')}
      },
      "/index.html": {
        "prefetch" : ["/quienessomos.html","/recursos-movilicemos.html"],
        "loadFunction": function(){console.log('index')}
      },
      "/quienessomos.html": {
        "prefetch" : ["/index.html", "/recursos-movilicemos.html"],
        "loadFunction": function(){console.log('quienessomos')}
      },
      "/recursos-movilicemos.html": {
        "prefetch" : ["/index.html", "/quienessomos.html", "/la-revista.html"],
        "loadFunction": function(){console.log('quienessomos')}
      },
      "all": {
        "prefetch" : ["index.html"],
        "loadFunction": function(urlTarget, jQuery, ga){
          ga('set', 'dimension1','faster');
          ga('send', 'pageview', urlTarget, {location: window.location.href});
          console.log('All url callback: ' + window.location.pathname);
        }
      }
    }
  }

  window.onload = function(){
    window.faster(websiteConfig, jQuery, ga);
  }
</script>
