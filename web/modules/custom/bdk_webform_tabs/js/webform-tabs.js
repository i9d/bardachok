(function ($, Drupal) {

    document.getElementById("suggest_idea").addEventListener("click", function(){
        $('#webform-submission-suggest-idea-node-12-add-form').removeClass('visually-hidden');
        $('#webform-submission-author-application-node-12-add-form').addClass('visually-hidden');
    });
    document.getElementById("become_author").addEventListener("click", function(){
        $('#webform-submission-suggest-idea-node-12-add-form').addClass('visually-hidden');
        $('#webform-submission-author-application-node-12-add-form').removeClass('visually-hidden');
    });
})(jQuery, Drupal);

