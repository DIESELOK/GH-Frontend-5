$(document).ready(function() {
    $('.clients-items').bxSlider({
        minSlides:5,
        maxSlides:5,
        slideWidth: 170,
        slideMargin: 100,
        auto: true,
        moveSlides: 1
    });

    $('.skills-item').bxSlider({
        minSlides: 2,
        maxSlides: 6,
        slideWidth: 350,
        slideMargin: 50,
        auto: true,
        moveSlides: 1
    });
});