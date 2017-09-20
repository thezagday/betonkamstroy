// Прокрутка к началу страницы

$(document).ready(function(){

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.to-top').fadeIn();
        } else {
            $('.to-top').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.to-top').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});
// взято с http://psp-wp.nolimit.by/ (http://panlider.by/)
