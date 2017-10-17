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

<?php $path =  base_path() . path_to_theme();?>

<div id="toTop"></div>
<?php include 'header.tpl.php'; ?> 

<div id="header-bottom" class="header-bottom-wrapper">
    <div class="region region-header-bottom">
    <div id="block-slider" class="block block-block-content block-block-contentae1f4314-8d5e-42b8-93fc-38832c7e0dab">
<div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item"><div class="columns-container">
  <div class="row" id="slider_row">
    <div class="center_column col-xs-12" id="top_column">  
      <div id="homepage-slider">
        <div class="bx-wrapper">
          <div class="bx-viewport">
            <ul id="homeslider"><li class="homeslider-container">
                <a href="#">
                  <img src="<?php print $path ?>/images/slider1.jpg"/></a>
                <div class="homeslider-description">
                  <div class="container">
                    <div>
                      <h2>Misionessim</h2>
                      <h3>...</h3>
                    </div>
                  </div>
                </div>
              </li>
              
              <li class="homeslider-container">
                <a href="#">
                  <img src="<?php print $path ?>/images/slider2.jpg"/></a>
                <div class="homeslider-description">
                  <div class="container">
                    <div>
                      <h2>Misionessim</h2>
                      <h3>...</h3>
                    </div>
                  </div>
                </div>
              </li>
              
              <li class="homeslider-container">
                <a href="#">
                  <img src="<?php print $path ?>/images/slider 3.jpg"/></a>
                <div class="homeslider-description">
                  <div class="container">
                    <div>
                      <h2 style="left: auto; visibility: inherit; opacity: 1;">Misionessim</h2>
                      <h3 style="right: auto; visibility: inherit; opacity: 1;">...</h3>
                    </div>
                  </div>
                </div>
              </li>
            </ul></div>
        </div>
      </div>
    </div>
  </div>
</div></div>
      
  </div>

  </div>

</div>

<div class="container" id="main-content">
  <div id="highlighted">
    <div class="region region-highlighted">
      <div class="views-element-container block block-views block-views-blockview-1-block-1" id="block-views-block-view-1-block-1">
        <div>
          <div class="view view-view-1 view-id-view_1 view-display-id-block_1 js-view-dom-id-3be99b537ce06d001ae4474b07def9aff5caf8d7f19288c245cb21be7c009943">
            <div class="view-header">
            </div>
            <div class="view-content">
              <div  class="views-view-grid">
                <div class="row">
                  <div class="col col-sm-4">
                    <div class="views-field views-field-title"><span class="field-content"><a href="node/3.html" hreflang="en">Sirve Con Nosotros</a></span></div>
                    <div class="views-field views-field-field-image">
                      <div class="field-content">  <a href="node/3.html"><img src="<?php print $path ?>/images/banner-3.jpg" width="370" height="267" alt="4" typeof="foaf:Image" />
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col col-sm-4">
                    <div class="views-field views-field-title"><span class="field-content"><a href="node/2.html" hreflang="en">Ora con nosotros</a></span></div>
                    <div class="views-field views-field-field-image">
                      <div class="field-content">  <a href="node/2.html"><img src="<?php print $path ?>/images/banner-2.jpg" width="370" height="267" alt="2" typeof="foaf:Image" />
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col col-sm-4">
                    <div class="views-field views-field-title"><span class="field-content"><a href="node/1.html" hreflang="en">Da a la obra</a></span></div>
                    <div class="views-field views-field-field-image">
                      <div class="field-content">  <a href="node/1.html"><img src="<?php print $path ?>/images/w.jpg" width="370" height="267" alt="1" typeof="foaf:Image" />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="featured" class="featured-wrapper"></div>
<div id="featured-2"></div>
<div id="featured-3"></div>
<div id="featured-4"></div>

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
        Powered by <a href="#">Misionessim</a>
      </div>
    </div>
  </div>
</footer>