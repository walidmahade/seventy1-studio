/*==================================
        pricing Page
==================================*/
console.log("pricing page scripts");

$(".has-hidden-field").click(function () {
    let hiddenFieldID = $(this).attr('data-hidden-field-id');

    if ($(this).is(':checked')) {

        $(".hidden-field[data-target-hidden-field=" + hiddenFieldID + "]").css({
            'display': 'flex',
            'visibility': 'visible'
        });

    } else {
        $(".hidden-field[data-target-hidden-field=" + hiddenFieldID + "]").css({
            'display': 'none',
            'visibility': 'hidden'
        });

        // $(".hidden-field[data-target-hidden-field=" + hiddenFieldID + "]")
    }

});