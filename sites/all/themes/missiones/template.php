<?php

function misiones_preprocess_views_view(&$vars) {
   $view = $vars['view'];
   
   // Make sure it's the correct view
  if($view->name == 'revista_vamos_banner') {
     // add needed javascript

     drupal_add_js(drupal_get_path('theme', 'misiones') . '/js/vamos-actions.js');
  }
}

?>