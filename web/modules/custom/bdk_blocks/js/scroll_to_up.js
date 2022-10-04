(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.scroll_to_up = {
    attach: function (context, settings) {
      $(document).ready(function () {

        $(this).scroll(function () {
          if ($(this).scrollTop() > 250) {
            $("#scrollToUpButton").css("display", "block");
          } else {
            $("#scrollToUpButton").css("display", "none");
          }
        });

        $("#scrollToUpButton").click(function () {
          $("html, body").animate({scrollTop: 0}, "fast");
        });
      });
    }
  };
})(jQuery, Drupal, drupalSettings);
