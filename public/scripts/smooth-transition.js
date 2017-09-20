// Плавная прокрутка к якорям

// Основное меню
$(document).ready(function(){
    $("#menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});
// Мобильное меню
$(document).ready(function(){
    $("#mobile-menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});
// взято из - http://gnatkovsky.com.ua/yakorya-i-plavnyj-perexod-po-yakornym-ssylkam.html
