jQuery(document).ready(function ($) {

    $('.slider-place').slick({
        arrows: true,
        dots: true,
        fade: true,
        infinite: true,
        autoplay: true,
        nextArrow: '.next',
        prevArrow: '.prev',
        autoplaySpeed: 12000,
        speed: 1000,
        adaptiveHeight: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1
            }
        }, {
            breakpoint: 500,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    
    $('.open-menu').click(function () {
        $(this).toggleClass('active');
        $('.menu-head').toggle('');
    });
    $('.close-mewse').click(function () {
        $('.mewse').removeClass('active');
    });
    $('.open-new-block').click(function () {
        $(this).toggleClass('active');
        $('.new-block-hide').toggle('');
    });

    $(".menu-head a").click(function () {
        $('.menu-head').hide("");
        $('.open-menu').removeClass("active");
    });
    $(".close").click(function () {
        $('body').removeClass("active_form");
    });
    $('.tabs-nav').delegate('li:not(.current)', 'click', function () {
        $(this).addClass('current').siblings().removeClass('current')
            .parents('.tabs').find('div.tabs-box').hide().eq($(this).index()).fadeIn(200);
    });
    $(".y-what-go").click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".y-what").offset().top - 100
        }, 500);
    });
    $(".y-calc-go").click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".y-calc").offset().top - 60
        }, 500);
    });
    $(".y-price-go").click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".y-price").offset().top - 100
        }, 500);
    });
    $(".y-why-go").click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".y-why").offset().top - 100
        }, 500);
    });
    $(".y-place-go").click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $(".y-place").offset().top - 100
        }, 500);
    });
    $("#up").click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $("#page").offset().top
        }, 500);
    });
    $("#up2").click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $("#page").offset().top
        }, 500);
    });

    setTimeout("$('.mewse').addClass('active');", 3000);

    var header = $('header'),
        scrollPrev = 0;

    $(window).scroll(function () {
        var scrolled = $(window).scrollTop();

        if (scrolled > 100 && scrolled > scrollPrev) {
            header.removeClass('fixed2');
        } else {
            header.addClass('fixed2');
        }
        scrollPrev = scrolled;
    });


    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 0) $('.menu-head').hide('');
        else $('.menu-head').hide('');
    });

    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 0) $('.open-menu.active').removeClass('active');
        else $('.open-menu.active').removeClass('active');
    });

});
$(window).scroll(function () {
    var height = $(window).scrollTop();
    /*Если сделали скролл на 100px задаём новый класс для header*/
    if (height > 0) {
        $('header').addClass('fixed');
    } else {
        /*Если меньше 100px удаляем класс для header*/
        $('header').removeClass('fixed');
    }
});
! function (i) {
    var o, n;
    i(".title_block").on("click", function () {
        o = i(this).parents(".accordion-item"), n = o.find(".info"),
            o.hasClass("active_block") ? (o.removeClass("active_block"),
                n.slideUp()) : (o.addClass("active_block"), n.stop(!0, !0).slideDown(),
                o.siblings(".active_block").removeClass("active_block").children(
                    ".info").stop(!0, !0).slideUp())
    })
}(jQuery);
