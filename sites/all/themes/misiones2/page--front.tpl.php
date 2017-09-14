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
<!--<div id="content" class="container"><div class="section">
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

</div></div>--> <!-- /.section, /#content -->
<!------------------------>
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
  
      <div id="highlighted">  <div class="region region-highlighted">
    <div class="views-element-container block block-views block-views-blockview-1-block-1" id="block-views-block-view-1-block-1">
  
    
      <div><div class="view view-view-1 view-id-view_1 view-display-id-block_1 js-view-dom-id-3be99b537ce06d001ae4474b07def9aff5caf8d7f19288c245cb21be7c009943">
  
    
      <div class="view-header">
      
    </div>
      
      <div class="view-content">
      
<div  class="views-view-grid">
      <div class="row">
              <div class="col col-sm-4">
                      <div class="views-field views-field-title"><span class="field-content"><a href="node/3.html" hreflang="en">New Arrivals</a></span></div><div class="views-field views-field-field-image"><div class="field-content">  <a href="node/3.html"><img src="<?php print $path ?>/images/banner-3.jpg" width="370" height="267" alt="4" typeof="foaf:Image" />
</a>
</div></div>
                  </div>
              <div class="col col-sm-4">
                      <div class="views-field views-field-title"><span class="field-content"><a href="node/2.html" hreflang="en">Top Hotels</a></span></div><div class="views-field views-field-field-image"><div class="field-content">  <a href="node/2.html"><img src="<?php print $path ?>/images/banner-2.jpg" width="370" height="267" alt="2" typeof="foaf:Image" />
</a>
</div></div>
                  </div>
              <div class="col col-sm-4">
                      <div class="views-field views-field-title"><span class="field-content"><a href="node/1.html" hreflang="en">Special Offers</a></span></div><div class="views-field views-field-field-image"><div class="field-content">  <a href="node/1.html"><img src="<?php print $path ?>/images/w.jpg" width="370" height="267" alt="1" typeof="foaf:Image" />
</a>
</div></div>
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

<div id="featured" class="featured-wrapper">
    <div class="region region-featured">
    <div id="block-parallax" class="block block-block-content block-block-content89e7ab8e-8bec-40df-a9d2-24b79a04c015">
  
    
      
            <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item"><div data-type-media="image" id="tmhtmlcontent_topColumn">
  <div class="container parallax_content">
    <div class="container">
      <ul class="tmhtmlcontent-topColumn"><li class="tmhtmlcontent-item-1">
          <div class="item-html">
            <h2 class="animated fadeInUp">More</h2>
            <h3 class="animated fadeInUp">Than You Can Imagine</h3>
            <a class="animated fadeInUp" href="index.html">MORE</a>
          </div>
        </li>
      </ul></div>
  </div>
</div>
</div>
      
  </div>

  </div>

</div>

<div id="featured-2">
    <div class="region region-featured-2">
    <div id="block-customtabs" class="block block-block-content block-block-content701452eb-24bb-4cc4-a273-79f52f40dcbd">
  
    
      
            <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item"><div class="container">
<div class="row">
<div class="col-sm-12">


<ul class="nav nav-tabs clearfix" id="home-page-tabs"><li class="homefeatured active"><a class="homefeatured" href="#homefeatured" data-toggle="tab">Popular</a></li>
  <li class="blocknewproducts"><a class="blocknewproducts" href="#blocknewproducts" data-toggle="tab">New arrivals</a></li>
</ul><div class="tab-content">
  <ul class="product_list grid row homefeatured tab-pane active" id="homefeatured"><li class="col-xs-12 col-sm-4 col-md-3 sec0">
      <div class="product-container" itemtype="http://schema.org/Product" itemscope="">
        <div class="left-block">
          <div class="product-image-container">
            <a title="Ancient-City Thailand" class="product_img_link" href="#" itemprop="url">
              <img title="Ancient-City Thailand" class="replace-2x img-responsive" alt="Ancient-City Thailand" src="images/1-tm_home_default.jpg" itemprop="image" /></a>
            <a class="quick-view" href="#" rel="#">
              <span>Quick view</span>
            </a>
            <a class="sale-box" href="#">
              <span class="sale-label">Sale!</span>
            </a>
          </div>
        </div>

        <div class="right-block">
          <h5 itemprop="name">
            <a title="Ancient-City Thailand" class="product-name" href="#" itemprop="url">
              <span class="list-name">Ancient-City Thailand</span>
              <span class="grid-name">Ancient-City Thailand</span>
            </a>
          </h5>

          <div class="comments_note" itemtype="http://schema.org/AggregateRating" itemscope="" itemprop="aggregateRating">
            <div class="star_content clearfix">
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <div class="star"></div>
              <div class="star"></div>
              <meta content="0" itemprop="worstRating" /><meta content="3" itemprop="ratingValue" /><meta content="5" itemprop="bestRating" /></div>
            <span class="nb-comments"><span itemprop="reviewCount">1</span> Review</span>
          </div>

          <p class="product-desc" itemprop="description">
            <span class="list-desc">Our planet is something unbelievable. It is so diverse and beautiful, so unique and controversial. Earth is worth our admiring. The easiest way to explore all wonders and unique places of our planet is travelling. </span>
            <span class="grid-desc">Our planet is something unbelievable....</span>
          </p>
  
          <div class="content_price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
            <span class="price product-price product-price-new" itemprop="price">
              $450.00
            </span>
            <meta content="USD" itemprop="priceCurrency" /><span class="old-price product-price">
              $900.00
            </span>
            <span class="price-percent-reduction">-50%</span>
          </div>

          <div class="button-container">
            <a title="Add to cart" class="ajax_add_to_cart_button btn btn-default" href="#" rel="nofollow" data-minimal_quantity="1" data-id-product="1">
              <span>Add to cart</span>
            </a>
            <a title="View" class="lnk_view btn btn-default" href="#" itemprop="url">
              <span>More</span>
            </a>
          </div>
          
<div class="product-flags">
</div>
<span class="availability" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
<span class="available-now">
<link href="http://schema.org/InStock" itemprop="availability" />In Stock </span>
</span>
</div>
</div> 
</li>
    
    <li class="col-xs-12 col-sm-4 col-md-3 sec1">
<div class="product-container" itemtype="http://schema.org/Product" itemscope="">
<div class="left-block">
<div class="product-image-container">
<a title="Barcelona" class="product_img_link" href="#" itemprop="url">
<img title="Barcelona" class="replace-2x img-responsive" alt="Barcelona" src="images/7-tm_home_default.jpg" itemprop="image" /></a>
<a class="quick-view" href="#" rel="#">
<span>Quick view</span>
</a>
<a class="sale-box" href="#">
<span class="sale-label">Sale!</span>
</a>
</div>
</div>
<div class="right-block">
<h5 itemprop="name">
<a title="Barcelona" class="product-name" href="#" itemprop="url">
<span class="list-name">Barcelona</span>
<span class="grid-name">Barcelona</span>
</a>
</h5>

<div class="comments_note" itemtype="http://schema.org/AggregateRating" itemscope="" itemprop="aggregateRating">
            <div class="star_content clearfix">
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <meta content="0" itemprop="worstRating" /><meta content="3" itemprop="ratingValue" /><meta content="5" itemprop="bestRating" /></div>
            <span class="nb-comments"><span itemprop="reviewCount">5</span> Reviews</span>
          </div>



<p class="product-desc" itemprop="description">
<span class="list-desc">Our planet is something unbelievable. It is so diverse and beautiful, so unique and controversial. Earth is worth our admiring. The easiest way to explore all wonders and unique places of our planet is travelling.</span>
<span class="grid-desc">Our planet is something unbelievable....</span>
</p>
<div class="content_price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
<span class="price product-price product-price-new" itemprop="price">
$640.00 </span>
<meta content="USD" itemprop="priceCurrency" /><span class="old-price product-price">
$800.00
</span>
<span class="price-percent-reduction">-20%</span>
</div>
<div class="button-container">
<a title="Add to cart" class="ajax_add_to_cart_button btn btn-default" href="#" rel="nofollow" data-minimal_quantity="1" data-id-product="2">
<span>Add to cart</span>
</a>
<a title="View" class="lnk_view btn btn-default" href="#" itemprop="url">
<span>More</span>
</a>
</div>
<div class="product-flags">
</div>
<span class="availability" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
<span class="available-now">
<link href="http://schema.org/InStock" itemprop="availability" />In Stock </span>
</span>
</div>
</div> 
</li>

    <li class="col-xs-12 col-sm-4 col-md-3 sec2">
<div class="product-container" itemtype="http://schema.org/Product" itemscope="">
<div class="left-block">
<div class="product-image-container">
<a title="Blanes Catalonia,Spain" class="product_img_link" href="#" itemprop="url">
<img title="Blanes Catalonia,Spain" class="replace-2x img-responsive" alt="Blanes Catalonia,Spain" src="images/13-tm_home_default.jpg" itemprop="image" /></a>
<a class="quick-view" href="#" rel="#&#10;&lt;/a&gt;&#10;&lt;a class=" sale-box="">
<span class="sale-label">Sale!</span>
</a>
</div>
</div>
<div class="right-block">
<h5 itemprop="name">
<a title="Blanes Catalonia,Spain" class="product-name" href="#" itemprop="url">
<span class="list-name">Blanes Catalonia,Spain</span>
<span class="grid-name">Blanes Catalonia,Spain</span>
</a>
</h5>

<div class="comments_note" itemtype="http://schema.org/AggregateRating" itemscope="" itemprop="aggregateRating">
            <div class="star_content clearfix">
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <div class="star"></div>
              <meta content="0" itemprop="worstRating" /><meta content="3" itemprop="ratingValue" /><meta content="5" itemprop="bestRating" /></div>
            <span class="nb-comments"><span itemprop="reviewCount">9</span> Reviews</span>
          </div>


<p class="product-desc" itemprop="description">
<span class="list-desc">Our planet is something unbelievable. It is so diverse and beautiful, so unique and controversial. Earth is worth our admiring. The easiest way to explore all wonders and unique places of our planet is travelling.</span>
<span class="grid-desc">Our planet is something unbelievable....</span>
</p>
<div class="content_price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
<span class="price product-price product-price-new" itemprop="price">
$720.00 </span>
<meta content="USD" itemprop="priceCurrency" /><span class="old-price product-price">
$900.00
</span>
<span class="price-percent-reduction">-20%</span>
</div>
<div class="button-container">
<a title="Add to cart" class="ajax_add_to_cart_button btn btn-default" href="#" rel="nofollow" data-minimal_quantity="1" data-id-product="3">
<span>Add to cart</span>
</a>
<a title="View" class="lnk_view btn btn-default" href="#" itemprop="url">
<span>More</span>
</a>
</div>
<div class="product-flags">
</div>
<span class="availability" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
<span class="available-now">
<link href="http://schema.org/InStock" itemprop="availability" />In Stock </span>
</span>
</div>
</div> 
</li>

    <li class="col-xs-12 col-sm-4 col-md-3 sec3">
<div class="product-container" itemtype="http://schema.org/Product" itemscope="">
<div class="left-block">
<div class="product-image-container">
<a title="Bulgaria" class="product_img_link" href="#" itemprop="url">
<img title="Bulgaria" class="replace-2x img-responsive" alt="Bulgaria" src="images/19-tm_home_default.jpg" itemprop="image" /></a>
<a class="quick-view" href="#" rel="#">
<span>Quick view</span>
</a>
<a class="sale-box" href="#">
<span class="sale-label">Sale!</span>
</a>
</div>
</div>
<div class="right-block">
<h5 itemprop="name">
<a title="Bulgaria" class="product-name" href="#" itemprop="url">
<span class="list-name">Bulgaria</span>
<span class="grid-name">Bulgaria</span>
</a>
</h5>

<div class="comments_note" itemtype="http://schema.org/AggregateRating" itemscope="" itemprop="aggregateRating">
            <div class="star_content clearfix">
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <div class="star star_on"></div>
              <meta content="0" itemprop="worstRating" /><meta content="3" itemprop="ratingValue" /><meta content="5" itemprop="bestRating" /></div>
            <span class="nb-comments"><span itemprop="reviewCount">12</span> Reviews</span>
          </div>

<p class="product-desc" itemprop="description">
<span class="list-desc">Our planet is something unbelievable. It is so diverse and beautiful, so unique and controversial. Earth is worth our admiring. The easiest way to explore all wonders and unique places of our planet is travelling. </span>
<span class="grid-desc">Our planet is something unbelievable....</span>
</p>
<div class="content_price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
<span class="price product-price product-price-new" itemprop="price">
$400.00 </span>
<meta content="USD" itemprop="priceCurrency" /><span class="old-price product-price">
$500.00
</span>
<span class="price-percent-reduction">-20%</span>
</div>
<div class="button-container">
<a title="Add to cart" class="ajax_add_to_cart_button btn btn-default" href="#" rel="nofollow" data-minimal_quantity="1" data-id-product="4">
<span>Add to cart</span>
</a>
<a title="View" class="lnk_view btn btn-default" href="#" itemprop="url">
<span>More</span>
</a>
</div>
<div class="product-flags">
</div>
<span class="availability" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
<span class="available-now">
<link href="http://schema.org/InStock" itemprop="availability" />In Stock </span>
</span>
</div>
</div> 
</li>
  </ul><ul class="product_list grid row blocknewproducts tab-pane" id="blocknewproducts"><li class="col-xs-12 col-sm-4 col-md-3 sec0">
      <div class="product-container" itemtype="http://schema.org/Product" itemscope="">
        <div class="left-block">
          <div class="product-image-container">
            <a title="Melbourne City, Australia" class="product_img_link" href="#" itemprop="url">
              <img title="Melbourne City, Australia" class="replace-2x img-responsive" alt="Melbourne City, Australia" src="images/97-tm_home_default.jpg" itemprop="image" /></a>

            <a class="quick-view" href="#" rel="#">
              <span>Quick view</span>
            </a>
            <a class="new-box" href="#">
              <span class="new-label">New</span>
            </a>
          </div>
        </div>
        
        <div class="right-block">
            <h5 itemprop="name">
            <a title="Melbourne City, Australia" class="product-name" href="#" itemprop="url">
            <span class="list-name">Melbourne City, Australia</span>
            <span class="grid-name">Melbourne City, Australia</span>
            </a>
            </h5>
            <p class="product-desc" itemprop="description">
            <span class="list-desc">Our planet is something unbelievable. It is so diverse and beautiful, so unique and controversial. Earth is worth our admiring. The easiest way to explore all wonders and unique places of our planet is travelling. </span>
            <span class="grid-desc">Our planet is something unbelievable....</span>
            </p>
            <div class="content_price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
            <span class="price product-price" itemprop="price">
            $550.00 </span>
            <meta content="USD" itemprop="priceCurrency" /></div>
            <div class="button-container">
            <a title="Add to cart" class="ajax_add_to_cart_button btn btn-default" href="#" rel="nofollow" data-minimal_quantity="1" data-id-product="17">
            <span>Add to cart</span>
            </a>
            <a title="View" class="lnk_view btn btn-default" href="#" itemprop="url">
            <span>More</span>
            </a>
            </div>
            <div class="product-flags">
            </div>
            <span class="availability" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
            <span class="available-now">
              <link href="http://schema.org/InStock" itemprop="availability" />In Stock </span>
          </span>
        </div>
      </div> 
    </li>
      
    <li class="col-xs-12 col-sm-4 col-md-3 sec1">
      <div class="product-container" itemtype="http://schema.org/Product" itemscope="">
        <div class="left-block">
          <div class="product-image-container">
              <a title="Moscow, Russia" class="product_img_link" href="#" itemprop="url">
              <img title="Moscow, Russia" class="replace-2x img-responsive" alt="Moscow, Russia" src="images/103-tm_home_default.jpg" itemprop="image" /></a>
              <a class="quick-view" href="#" rel="#">
              <span>Quick view</span>
              </a>
              <a class="new-box" href="#">
              <span class="new-label">New</span>
              </a>
              </div>
              </div>
              <div class="right-block">
              <h5 itemprop="name">
              <a title="Moscow, Russia" class="product-name" href="#" itemprop="url">
              <span class="list-name">Moscow, Russia</span>
              <span class="grid-name">Moscow, Russia</span>
              </a>
              </h5>
              <p class="product-desc" itemprop="description">
              <span class="list-desc">Our planet is something unbelievable. It is so diverse and beautiful, so unique and controversial. Earth is worth our admiring. The easiest way to explore all wonders and unique places of our planet is travelling. </span>
              <span class="grid-desc">Our planet is something unbelievable....</span>
              </p>
              <div class="content_price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
              <span class="price product-price" itemprop="price">
              $500.00 </span>
              <meta content="USD" itemprop="priceCurrency" /></div>
              <div class="button-container">
              <a title="Add to cart" class="ajax_add_to_cart_button btn btn-default" href="#" rel="nofollow" data-minimal_quantity="1" data-id-product="18">
              <span>Add to cart</span>
              </a>
            <a title="View" class="lnk_view btn btn-default" href="#" itemprop="url">
              <span>More</span>
            </a>
          </div>
          <div class="product-flags">
          </div>
          <span class="availability" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
            <span class="available-now"><link href="http://schema.org/InStock" itemprop="availability" />In Stock </span>
          </span>
        </div>
      </div> 
    </li>
              
    <li class="col-xs-12 col-sm-4 col-md-3 sec2">
      <div class="product-container" itemtype="http://schema.org/Product" itemscope="">
        <div class="left-block">
          <div class="product-image-container">
            <a title="Italy and Austria" class="product_img_link" href="#" itemprop="url">
              <img title="Italy and Austria" class="replace-2x img-responsive" alt="Italy and Austria" src="images/109-tm_home_default.jpg" itemprop="image" /></a>
              <a class="quick-view" href="#" rel="#">
              <span>Quick view</span>
              </a>
              <a class="new-box" href="#">
              <span class="new-label">New</span>
              </a>
              </div>
              </div>
              <div class="right-block">
              <h5 itemprop="name">
              <a title="Italy and Austria" class="product-name" href="#" itemprop="url">
              <span class="list-name">Italy and Austria</span>
              <span class="grid-name">Italy and Austria</span>
              </a>
              </h5>
              <p class="product-desc" itemprop="description">
              <span class="list-desc">Our planet is something unbelievable. It is so diverse and beautiful, so unique and controversial. Earth is worth our admiring. The easiest way to explore all wonders and unique places of our planet is travelling.</span>
              <span class="grid-desc">Our planet is something unbelievable....</span>
              </p>
              <div class="content_price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
              <span class="price product-price" itemprop="price">
              $860.00 </span>
              <meta content="USD" itemprop="priceCurrency" /></div>
              <div class="button-container">
              <a title="Add to cart" class="ajax_add_to_cart_button btn btn-default" href="#" rel="nofollow" data-minimal_quantity="1" data-id-product="19">
              <span>Add to cart</span>
              </a>
            <a title="View" class="lnk_view btn btn-default" href="#" itemprop="url">
              <span>More</span>
            </a>
          </div>
          <div class="product-flags">
          </div>
          <span class="availability" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
            <span class="available-now"><link href="http://schema.org/InStock" itemprop="availability" />In Stock </span>
          </span>
        </div>
      </div> 
    </li>
    
    <li class="col-xs-12 col-sm-4 col-md-3 sec3">
      <div class="product-container" itemtype="http://schema.org/Product" itemscope="">
        <div class="left-block">
          <div class="product-image-container">
            <a title="New-York city, USA" class="product_img_link" href="#" itemprop="url">
              <img title="New-York city, USA" class="replace-2x img-responsive" alt="New-York city, USA" src="images/115-tm_home_default.jpg" itemprop="image" /></a>
              <a class="quick-view" href="#" rel="#">
              <span>Quick view</span>
              </a>
              <a class="new-box" href="#">
              <span class="new-label">New</span>
              </a>
              </div>
              </div>
              <div class="right-block">
              <h5 itemprop="name">
              <a title="New-York city, USA" class="product-name" href="#" itemprop="url">
              <span class="list-name">New-York city, USA</span>
              <span class="grid-name">New-York city, USA</span>
              </a>
              </h5>
              <p class="product-desc" itemprop="description">
              <span class="list-desc">Our planet is something unbelievable. It is so diverse and beautiful, so unique and controversial. Earth is worth our admiring. The easiest way to explore all wonders and unique places of our planet is travelling.</span>
              <span class="grid-desc">Our planet is something unbelievable....</span>
              </p>
              <div class="content_price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
              <span class="price product-price" itemprop="price">
              $770.00 </span>
              <meta content="USD" itemprop="priceCurrency" /></div>
              <div class="button-container">
              <a title="Add to cart" class="ajax_add_to_cart_button btn btn-default" href="#" rel="nofollow" data-minimal_quantity="1" data-id-product="20">
              <span>Add to cart</span>
              </a>
              <a title="View" class="lnk_view btn btn-default" href="#" itemprop="url">
              <span>More</span>
              </a>
              </div>
          <div class="product-flags">
          </div>
          <span class="availability" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
            <span class="available-now"><link href="http://schema.org/InStock" itemprop="availability" />In Stock </span>
          </span>
        </div>
      </div> 
    </li>
              
    <li class="col-xs-12 col-sm-4 col-md-3">
      <div class="product-container" itemtype="http://schema.org/Product" itemscope="">
        <div class="left-block">
          <div class="product-image-container">
            <a title="London, Great Britain" class="product_img_link" href="#" itemprop="url">
              <img title="London, Great Britain" class="replace-2x img-responsive" alt="London, Great Britain" src="images/85-tm_home_default.jpg" itemprop="image" /></a>
              <a class="quick-view" href="#" rel="#">
              <span>Quick view</span>
              </a>
              <a class="new-box" href="#">
              <span class="new-label">New</span>
              </a>
              </div>
              </div>
              <div class="right-block">
              <h5 itemprop="name">
              <a title="London, Great Britain" class="product-name" href="#" itemprop="url">
              <span class="list-name">London, Great Britain</span>
              <span class="grid-name">London, Great Britain</span>
              </a>
              </h5>
              <p class="product-desc" itemprop="description">
              <span class="list-desc">Our planet is something unbelievable. It is so diverse and beautiful, so unique and controversial. Earth is worth our admiring. The easiest way to explore all wonders and unique places of our planet is travelling.</span>
              <span class="grid-desc">Our planet is something unbelievable....</span>
              </p>
              <div class="content_price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
              <span class="price product-price" itemprop="price">
              $500.00 </span>
              <meta content="USD" itemprop="priceCurrency" /></div>
              <div class="button-container">
              <a title="Add to cart" class="ajax_add_to_cart_button btn btn-default" href="#" rel="nofollow" data-minimal_quantity="1" data-id-product="15">
              <span>Add to cart</span>
              </a>
              <a title="View" class="lnk_view btn btn-default" href="#" itemprop="url">
              <span>More</span>
              </a>
              </div>
              <div class="product-flags">
              </div>
          <span class="availability" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
            <span class="available-now"><link href="http://schema.org/InStock" itemprop="availability" />In Stock </span>
          </span>
        </div>
      </div> 
    </li>
              
    <li class="col-xs-12 col-sm-4 col-md-3 sec1">
      <div class="product-container" itemtype="http://schema.org/Product" itemscope="">
        <div class="left-block">
          <div class="product-image-container">
            <a title="Maldives" class="product_img_link" href="#" itemprop="url">
              <img title="Maldives" class="replace-2x img-responsive" alt="Maldives" src="images/91-tm_home_default.jpg" itemprop="image" /></a>
              <a class="quick-view" href="#" rel="#">
              <span>Quick view</span>
              </a>
              <a class="new-box" href="#">
              <span class="new-label">New</span>
              </a>
              </div>
              </div>
              <div class="right-block">
              <h5 itemprop="name">
              <a title="Maldives" class="product-name" href="#" itemprop="url">
              <span class="list-name">Maldives</span>
              <span class="grid-name">Maldives</span>
              </a>
              </h5>
              <p class="product-desc" itemprop="description">
              <span class="list-desc">Our planet is something unbelievable. It is so diverse and beautiful, so unique and controversial. Earth is worth our admiring. The easiest way to explore all wonders and unique places of our planet is travelling.</span>
              <span class="grid-desc">Our planet is something unbelievable....</span>
              </p>
              <div class="content_price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
              <span class="price product-price" itemprop="price">
              $890.00 </span>
              <meta content="USD" itemprop="priceCurrency" /></div>
              <div class="button-container">
              <a title="Add to cart" class="ajax_add_to_cart_button btn btn-default" href="#" rel="nofollow" data-minimal_quantity="1" data-id-product="16">
              <span>Add to cart</span>
              </a>
              <a title="View" class="lnk_view btn btn-default" href="#" itemprop="url">
              <span>More</span>
              </a>
              </div>
              <div class="product-flags">
              </div>
          <span class="availability" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
            <span class="available-now"><link href="http://schema.org/InStock" itemprop="availability" />In Stock </span>
          </span>
        </div>
      </div> 
    </li>
    
    <li class="col-xs-12 col-sm-4 col-md-3 sec2">
      <div class="product-container" itemtype="http://schema.org/Product" itemscope="">
        <div class="left-block">
          <div class="product-image-container">
            <a title="Greece" class="product_img_link" href="#" itemprop="url">
              <img title="Greece" class="replace-2x img-responsive" alt="Greece" src="images/61-tm_home_default.jpg" itemprop="image" /></a>
              <a class="quick-view" href="#" rel="#">
              <span>Quick view</span>
              </a>
              <a class="new-box" href="#">
              <span class="new-label">New</span>
              </a>
              </div>
              </div>
              <div class="right-block">
              <h5 itemprop="name">
              <a title="Greece" class="product-name" href="#" itemprop="url">
              <span class="list-name">Greece</span>
              <span class="grid-name">Greece</span>
              </a>
              </h5>
              <p class="product-desc" itemprop="description">
              <span class="list-desc">Our planet is something unbelievable. It is so diverse and beautiful, so unique and controversial. Earth is worth our admiring. The easiest way to explore all wonders and unique places of our planet is travelling.</span>
              <span class="grid-desc">Our planet is something unbelievable....</span>
              </p>
              <div class="content_price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
              <span class="price product-price product-price-new" itemprop="price">
              $536.00 </span>
              <meta content="USD" itemprop="priceCurrency" /></div>
              <div class="button-container">
              <a title="Add to cart" class="ajax_add_to_cart_button btn btn-default" href="#" rel="nofollow" data-minimal_quantity="1" data-id-product="11">
              <span>Add to cart</span>
              </a>
              <a title="View" class="lnk_view btn btn-default" href="#" itemprop="url">
              <span>More</span>
              </a>
              </div>
              <div class="product-flags">
              <span class="discount">Reduced price!</span>
              </div>
          <span class="availability" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
            <span class="available-now"><link href="http://schema.org/InStock" itemprop="availability" />In Stock </span>
          </span>
        </div>
      </div> 
    </li>
              
    <li class="col-xs-12 col-sm-4 col-md-3 sec3">
      <div class="product-container" itemtype="http://schema.org/Product" itemscope="">
        <div class="left-block">
          <div class="product-image-container">
            <a title="India" class="product_img_link" href="#" itemprop="url">
              <img title="India" class="replace-2x img-responsive" alt="India" src="images/67-tm_home_default.jpg" itemprop="image" /></a>
              <a class="quick-view" href="#" rel="#">
              <span>Quick view</span>
              </a>
              <a class="new-box" href="#">
              <span class="new-label">New</span>
              </a>
              </div>
              </div>
              <div class="right-block">
              <h5 itemprop="name">
              <a title="India" class="product-name" href="#" itemprop="url">
              <span class="list-name">India</span>
              <span class="grid-name">India</span>
              </a>
              </h5>
              <p class="product-desc" itemprop="description">
              <span class="list-desc">Our planet is something unbelievable. It is so diverse and beautiful, so unique and controversial. Earth is worth our admiring. The easiest way to explore all wonders and unique places of our planet is travelling. </span>
              <span class="grid-desc">Our planet is something unbelievable....</span>
              </p>
              <div class="content_price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
              <span class="price product-price" itemprop="price">
              $525.00 </span>
              <meta content="USD" itemprop="priceCurrency" /></div>
              <div class="button-container">
              <a title="Add to cart" class="ajax_add_to_cart_button btn btn-default" href="#" rel="nofollow" data-minimal_quantity="1" data-id-product="12">
              <span>Add to cart</span>
              </a>
              <a title="View" class="lnk_view btn btn-default" href="#" itemprop="url">
              <span>More</span>
              </a>
              </div>
              <div class="product-flags">
              </div>
          <span class="availability" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
            <span class="available-now"><link href="http://schema.org/InStock" itemprop="availability" />In Stock </span>
          </span>
        </div>
      </div> 
    </li>
  </ul></div>


</div>
</div>
</div>
</div>
      
  </div>

  </div>

</div>

<div id="featured-3">
  <div class="container">
      <div class="region region-featured-3">
    <div id="block-parallax2" class="block block-block-content block-block-contentf87fa210-c8ad-4176-9b38-b5db9c03c741">
  
    
      
            <div class="clearfix text-formatted field field--name-body field--type-text-with-summary field--label-hidden field__item"><div class="parallax_section" id="tmhtmlcontent_home" data-type-media="image">
  <div class="container parallax_content">
    <ul class="tmhtmlcontent-home"><li class="tmhtmlcontent-item-1">
        <div class="item-html">
          <h2 class="animated fadeInUp">Chasing Angels or Fleeing Demons, Go to The </h2>
          <h3 class="animated fadeInUp">Mountains</h3>
          <a class="animated fadeInUp" href="#">MORE</a>
        </div>
      </li>
    </ul></div>
</div></div>
      
  </div>

  </div>

  </div>
</div>

<div id="featured-4">
  
</div>















<!------------------>






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