
(function ($) {
    $(function() {

        /*Init Select 2 */

       $(".select-js-select2").select2();

        var form = $('.js-form-tugas');
        form.find('.js-input-progress').on('input',function(){
            form.find('.js-progress-percent').text($(this).val())
        });

        /* Ajax for input job */


    });
})(jQuery);
