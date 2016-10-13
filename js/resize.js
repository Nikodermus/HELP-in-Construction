//Resizing
$(window).load(function () {
    $(window).resize(function () {
        var elem = $(this);
        var elemAncho = $(this).width();
        var elemAlto = $(this).height();

        if (elemAncho < 672) {
            if (elemAncho > elemAlto) {
                $('.main-image').css('opacity', '.3')
                $('body').css('overflow', 'visible').css('height', '150vh')
            } else {
                $('.main-image').css('opacity', '1');
                $('body').css('overflow', 'hidden').css('height', '100vh')
            }
        };


        if (elemAncho <= 900) { //Mobile
            $('.mainFrame').css('height', elemAncho - 21);

        } else { //Desktop 
            $('.mainFrame').css('height', elemAncho - 21);
        }
    });
    $(window).resize();
});