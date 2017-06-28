<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>

<div id="toTop"></div>
<nav class="navbar" id="top-nav-container" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <div class="region region-header">
        <div id="block-bon-voyage-branding" class="block block-system block-system-branding-block">
          <div id="header_logo">
            <?php if ($logo): ?>
              <a class="logo navbar-btn" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
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

<div id="content" class="container"><div class="section">
  <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
  <a id="main-content"></a>
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
  <?php print $feed_icons; ?>

</div></div> <!-- /.section, /#content -->

<footer id="footer">

  <div class="middle-footer-wrapper">
    <div class="container">
      <div class="middle-footer">
        <div class="region region-footer">
          <div id="block-socialicons" class="block block-block-content block-block-contentdba664a4-eedc-4024-b73b-7d5903d71b97">
            <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item">
              <section id="social_block">
                <ul>
                  <li class="facebook">
                    <a title="Facebook" href="https://www.facebook.com/SIMLatinoamerica/" target="_blank">
                    <span>Facebook</span>
                    </a>
                  </li>
                  <li class="rss">
                    <a title="RSS" href="rss.xml" target="_blank">
                    <span>RSS</span>
                    </a>
                  </li>
                  <li class="youtube">
                    <a title="YouTube" href="https://www.youtube.com/user/VamosSIM" target="_blank">
                    <span>YouTube</span>
                    </a>
                  </li>
                </ul>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-footer-wrapper">
    <div class="container">
      <div class="bottom-footer">
        Powered by <a href="http://www.saengo.com/">Nataly Inc.</a>
      </div>
    </div>
  </div>
</footer>