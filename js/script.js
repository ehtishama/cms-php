$(document).ready(function(){


    $('.slider').slick({
        autoplay: false,
        arrows: true,

    });

    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: $('.back')[0],
        nextArrow: $('.next')[0]
    });

    $(".next").click(function(e){

        category = $(this).parents('.category')
        slider = category.children('.multiple-items')


        slider.slick('slickNext')

    });



    $(".back").click(function(e){

        category = $(this).parents('.category')
        slider = category.children('.multiple-items')


        slider.slick('slickPrev')

    });


});