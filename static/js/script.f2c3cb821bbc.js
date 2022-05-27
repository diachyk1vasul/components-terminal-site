$(function () {
    $('#select_lang').on('change', function () {
        let value = this.value
        window.location.href = value
    })
    $(".mob-ico").click(function (o) {
        $("nav ul").hasClass("nav_open") ? ($("nav ul").removeClass("nav_open"), $(this).removeClass("open")) : ($("nav ul").addClass("nav_open"), $(this).addClass("open"))
    }), $("nav ul li a").click(function (o) {
        $("nav ul").removeClass("nav_open")
    }), $(window).width() <= 1200 ? ($(".catalog_mobile").click(function (o) {
        $(".header_catalog ul").hasClass("open_catalog") ? ($(".header_catalog ul").removeClass("open_catalog"), $(this).removeClass("open")) : ($(" .header_catalog ul").addClass("open_catalog"), $(this).addClass("open"))
    }), $(" .header_catalog ul li a").click(function (o) {
        $(" .header_catalog ul").removeClass("open_catalog")
    })) : $(".header_catalog").hover(function () {
        $("ul", this).show(), $(".catalog_mobile").addClass("open")
    }, function () {
        $("ul", this).hide(), $(".catalog_mobile").removeClass("open")
    }), $(" .catalog_dropdown").on("click", "li", function () {
        $(".drop-content", this).hasClass("open") ? ($(".drop-content", this).hide().removeClass("open"), $(".drop", this).removeClass("active")) : ($(".drop-content", this).show().addClass("open"), $(".drop", this).addClass("active"))
    }), $(".four-items").slick({
        infinite: !1,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{breakpoint: 1100, settings: {slidesToShow: 3}}, {
            breakpoint: 900,
            settings: {slidesToShow: 2}
        }, {breakpoint: 580, settings: {slidesToShow: 1}}]
    }), $(".slider-for").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: !0,
        fade: !0,
        asNavFor: ".slider-nav"
    }), $(".slider-nav").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: ".slider-for",
        dots: !1,
        centerMode: !0,
        arrows: !1,
        focusOnSelect: !0
    }), $(".one_slide_fade").slick({
        autoplay: !0,
        autoplaySpeed: 5e3,
        dots: !1,
        arrows: !0,
        infinite: !0,
        speed: 500,
        fade: !0,
        cssEase: "linear"
    }), $(".open-window").fancybox()
});