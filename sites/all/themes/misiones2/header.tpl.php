<?php $path =  base_path() . path_to_theme();?>
<nav id="top-nav-container" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <div class="region region-header">
        <div id="block-bon-voyage-branding" class="block block-system block-system-branding-block">
          <div id="header_logo">
            <?php if ($logo): ?>
              <a class="logo navbar-btn" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $path ?>/images/logo.png" alt="<?php print t('Home'); ?>" />
              </a>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
    <div id="top-navbar">
      <div id="top-navbar-row-1">
        <div class="region region-user-menu">
          <div aria-labelledby="block-useraccountmenu-menu" id="block-useraccountmenu">
            <h2 class="visually-hidden">User account menu</h2>
            <ul class="menu">
              <li class="menu-item">
                <div class="region region-search">
                  <div class="search-block-form block block-search container-inline" data-drupal-selector="search-block-form" id="block-searchform" role="search">
                    
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<nav class="navbar navbar-static-top stickUpTop" id="main-nav-container" role="navigation">
  <div class="container">
    <button class="navbar-toggle collapsed" aria-expanded="false" type="button" data-toggle="collapse" data-target="#main-navbar">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <div class="navbar-title">Categories</div>
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