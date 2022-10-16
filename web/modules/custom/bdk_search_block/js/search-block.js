(function ($, once) {
  'use strict';
  Drupal.behaviors.BdkSearchBlock = {
    attach: function (context) {

      $('#search-view .view-filters .clear-value-btn').once('clear-value').on("click", function(event) {
        $("#search-view .view-filters .form-text").val("");
      });

      $(document).once('view-click').on('click', '#search-button, #search-view', function (event) {
        if (event.target !== this) return;
        toggleModal();
      });

      function toggleModal() {
        $('#search-view').toggleClass('visually-hidden');
        // $('body').toggleClass('no-scroll');
        $('#scrollToUpButton').toggleClass('visually-hidden');
      }
    },
  };
})(jQuery, Drupal, drupalSettings, window.Cookies, once);
