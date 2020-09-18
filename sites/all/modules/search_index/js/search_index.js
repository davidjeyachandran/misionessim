/**
 * @file
 * Updates summary for Search Index Option on node edit form.
 */

 (function ($) {

  Drupal.behaviors.search_indexFieldsetSummaries = {
    attach: function (context) {
      $('fieldset#edit-search-index', context).drupalSetSummary(function (context) {
        if ($('.form-item-search-index-option input', context).is(':checked')) {
          return Drupal.t('Included in search indexing');
        }
        else {
          return Drupal.t('Excluded from search indexing');
        }
      });
    }
  };

  })(jQuery);
