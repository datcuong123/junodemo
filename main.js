$(document).ready(function () {
    $(".image-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        draggable: false,
        prevArrow: ".arrow-left",
        nextArrow: ".arrow-right",
    });
});
$(document).ready(function () {
    $(".image-slider-product").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        draggable: false,
        prevArrow: ".arrows-left",
        nextArrow: ".arrows-right",
    });
});
$(document).ready(function () {
    $(".slider-product-4").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        draggable: false,
        prevArrow: ".arrows-left",
        nextArrow: ".arrows-right",
    });
});
