$(function () {

    var operatorChecked = false;

    $('.number').click(function () {
        if (operatorChecked === false) {

            $('#nb1').val($('#nb1').val() + $(this).val());

        } else {
            $('#nb2').val($('#nb2').val() + $(this).val());
        };
    });

    $('.operator').click(function () {
        $('#operator').val($(this).val());
        operatorChecked = true;
    });

});