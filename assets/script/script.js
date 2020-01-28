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

    $('#powerOff').click(function () {
        $('#nb1').css({
            "background-color": "#616962"
        });
        $('#nb2').css({
            "background-color": "#616962"
        });
        $('#operator').css({
            "background-color": "#616962"
        });
        $('#overview').css({
            "background-color": "#616962"
        });
        $('#result').css({
            "background-color": "#616962"
        });
        $('.borderWindow').css({
            "background-color": "#616962"
        });
        $('#overview').val("");
    });

    $("#dot").click(function () {
        $(this).attr("disabled","disabled");
    });
    $("#multiply").click(function () {
        $("#dot").removeAttr("disabled");
    });
    $("#split").click(function () {
        $("#dot").removeAttr("disabled");
    });
    $("#more").click(function () {
        $("#dot").removeAttr("disabled");
    });
    $("#less").click(function () {
        $("#dot").removeAttr("disabled");
    });
});