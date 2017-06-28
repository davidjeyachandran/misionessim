<!-- PAGE - FRONT -->

<?php $path =  base_path() . path_to_theme();?>

<div class="mainwrapper">
	<div class="mainwrapperinner">
	<!-- SET: WRAPPER -->
	<div class="wrapper">
		<!-- SET: HEADER -->
		<div id="header" class="header-other">
			<div class="nav">
				<?php print render($page['navigation']); ?>
			</div>  
		</div>
		<!-- END: HEADER -->            

	  <!-- SET: MAIN CONTENT -->
		<div class="maincontent">
			<div class="whiteblockborder">                              
			<div class="front-content">
			  
			  <?php print render($title_prefix); ?>
			  <?php if ($title): ?>
			  <h1 class="title" id="page-title">
				<?php print $title; ?>
			  </h1>
			  <?php endif; ?>                          
			  <?php print render($title_suffix); ?>
			  <?php if ($tabs): ?>
			  <div class="tabs">
				<?php print render($tabs); ?>
			  </div>
			  <?php endif; ?>                                   
			  <?php print render($page['help']); ?>
			  <?php if ($action_links): ?>
			  <ul class="action-links">
			  <?php print render($action_links); ?>
			  </ul>
			  <?php endif; ?>                                       
					<?php print render($page['content']); ?>  
					</div>
		  </div>
			</div>
	  <!-- END: MAIN CONTENT -->         

	  <!-- SET: FOOTER -->
	  <!-- END: FOOTER -->

	</div>
	</div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12299775-6', 'misionessim.org');
  ga('send', 'pageview');

</script>