
(function ($) {
    $(function() {
        var form = $('.js-form-tugas');
        form.find('.js-input-progress').on('input',function(){
            form.find('.js-progress-percent').text($(this).val())
        })
    });
})(jQuery);
