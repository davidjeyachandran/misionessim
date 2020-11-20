<?php

function misiones2_preprocess_views_view(&$vars) {
   $view = $vars['view'];

   // Make sure it's the correct view
  if($view->name == 'revista_vamos_banner') {
     // drupal_add_js(drupal_get_path('theme', 'misiones2') . '/js/vamos-actions.js');
  }
}

function misiones2_process_page(&$variables) {
   $variables['theme_hook_suggestions'][] = 'page__'. $variables['node']->type;
 }

 function misiones2_preprocess_page(&$variables) {
   $nid = arg(1);
   if (arg(0) == 'node' && is_numeric($nid)) {
      if (isset($variables['page']['content']['system_main']['nodes'][$nid])) {
        $variables['node_content'] =& $variables['page']['content']['system_main']['nodes'][$nid];
        if (empty($variables['node_content']['field_mainimage'])) {
          $variables['node_content']['field_mainimage'] = NULL;
        }
      }
    }
 }
