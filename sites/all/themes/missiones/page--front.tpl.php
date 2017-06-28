<!-- PAGE - FRONT -->

<?php $path =  base_path() . path_to_theme();?>

<div class="mainwrapper">
	<div class="mainwrapperinner">
	<!-- SET: WRAPPER -->
	<div class="wrapper">
		<!-- SET: HEADER -->
		<div id="header" class="header-front">
			<div id="staticimgheader"> 
				<img src=" <?php print $path ?>/img/sim-header.png" alt="image" title="image"/> 
			</div>   
			<!-- SET: BANNER SLIDE -->
			<div class="slideshow">	
				<img src="<?php print $path ?>/img/headers-img1.jpg" alt="SIM" title="SIM"/>
				<img src="<?php print $path ?>/img/headers-img2.jpg" alt="image"/>
				<img src="<?php print $path ?>/img/headers-img3.jpg" alt="image"/>
				<img src="<?php print $path ?>/img/headers-img4.jpg" alt="image"/>
				<img src="<?php print $path ?>/img/headers-img5.jpg" alt="image"/>
				<img src="<?php print $path ?>/img/headers-img6.jpg" alt="image"/>
			</div>          
			<!-- END: BANNER SLIDE -->
			<div class="nav">
				<?php print render($page['navigation']); ?>
			</div>  
		</div>
		<!-- END: HEADER -->            

		<!-- SET:MAGAZINE VAMOS -->

		<div class="magazine-container">
		<div id="left-magazine" class="hover">
		<?php
			print render($page['left-magazine']);
			//$whole_block = block_load('block','2'); // not really the whole block until render
			//print drupal_render(_block_get_renderable_array(_block_render_blocks(array($whole_block))));
		?>
		</div>
		
		<div id="right-magazine">
		<?php
			$whole_block = block_load('block','1'); // not really the whole block until render
			print drupal_render(_block_get_renderable_array(_block_render_blocks(array($whole_block))));
		?>
		</div>
		</div>
		
		<!-- END:MAGAZINE VAMOS -->


		<!-- SET: MULTIMEDIA -->            
	  
          <br/>
	  <div id="rt-utility">
		<div class="rt-container">
				
		  <div class="rt-grid-3 video" style="display:none">
			<iframe width="345" height="300" src="http://www.youtube.com/embed/CJSBrVRGGjA?wmode=Opaque"></iframe>
		  </div>
		  <div class="rt-grid-3 video hidden" style="display:none">
			<iframe width="345" height="300" src="http://www.youtube.com/embed/eJuIgS6DSxs?wmode=Opaque"></iframe>
		  </div>
		  <div class="rt-grid-3 rt-omega social-box hidden">
			<div class="itp-social-boxYT">
			<a target="_blank" href="mailto:sim.preguntas@sim.org"><button class="btn-contactanos">Contáctanos</button></a>
			<br>
			  <a target="_blank" href="/rss.xml" rel="alternate" type="application/rss+xml"><div class="rss"></div></a>
			  <a target="_blank" href="http://www.facebook.com/pages/Vamos-SIM/165356666818348"><div class="facebook"></div></a>
			  <a target="_blank" href="mailto:sim.preguntas@sim.org"><div class="email"></div></a>
			  <a title="Canal Youtube" target="_blank" href="http://www.youtube.com/VamosSIM/"><div class="youtube"></div></a>
			  <a title="SIM Ingles" target="_blank" href="http://sim.org/"><div class="SIMingles"></div></a>
			  <a title="SIM Brasil" target="_blank" href="http://simbrasil.org.br/"><div class="simbrasil"></div></a> 
			</div>
		  </div>
		  <div class="clear"></div>
		</div>
	  </div>

	<!-- END: MULTIMEDIA -->            

	  <!-- SET: MAIN CONTENT -->
	  <!-- END: MAIN CONTENT -->            

	  <!-- SET: FOOTER -->
	  <!-- END: FOOTER -->

	</div>
	</div>
</div>
<script type="text/javascript">
  jQuery(document).ready(function($) {
      $('.slideshow').cycle({
      fx:     'fade',
      timeout: 4000,
        speed:  4000,
        pause: 1    
    });   
  });
  
  window.onload = jQuery('.video').fadeIn(4000);
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12299775-6', 'misionessim.org');
  ga('send', 'pageview');

</script>