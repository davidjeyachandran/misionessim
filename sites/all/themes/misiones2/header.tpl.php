<?php $path =  base_path() . path_to_theme();?>

<nav class="navbar navbar-static-top stickUpTop" id="main-nav-container" role="navigation">
  <div class="container">
          <div id="header_logo">
              <a class="logo navbar-btn" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $path ?>/images/logo-reversed.png" alt="<?php print t('Home'); ?>" />
              </a>
          </div>
    <button class="navbar-toggle collapsed" aria-expanded="false" type="button" data-toggle="collapse" data-target="#main-navbar">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <div class="navbar-title">Categorias</div>
    <div class="collapse navbar-collapse" id="main-navbar">
      <div class="region region-primary-menu">
        <div aria-labelledby="block-mainnavigation-menu" id="block-mainnavigation">

          <?php if ($main_menu): ?>
            <div id="main-menu" class="navigation">
              <?php print theme('links__system_main_menu', array(
                'links' => $main_menu,
                'attributes' => array(
                  'id' => 'main-menu-links',
                  'class' => array('links', 'clearfix','navbar-nav','nav'),
                ),
                'heading' => array(
                  'text' => t('Main menu'),
                  'level' => 'h2',
                  'class' => array('element-invisible'),
                ),
              )); ?>
            </div> <!-- /#main-menu -->
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</nav>