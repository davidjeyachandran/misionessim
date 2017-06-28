<?php

function misiones2_preprocess_views_view(&$vars) {
   $view = $vars['view'];
   dpm($view);

   // Make sure it's the correct view
  if($view->name == 'revista_vamos_banner') {
     drupal_add_js(drupal_get_path('theme', 'misiones2') . '/js/vamos-actions.js');
  }
}

?>