    var faded = true;
$(function() {

    $('a').click(function() {
        if (!faded) {
            $('#box').fadeOut();
            faded = true;
        } else {
            $('#box').fadeIn();
            faded = false;
        }
    });
});