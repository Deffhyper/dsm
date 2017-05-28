"use strict";
$(function() {

    //global scope
    var windowWidth = $(window).width();


    ////////////////////////////////// mobile footer ///////////////////////////////////////

    function bindJsOnMobile(windowWidth) {

        var pageFtitle = $('.footer-mob-title');

        if (windowWidth < 768) {
            pageFtitle.unbind('click').click(function (e) {
                e.preventDefault();
                $(this).next().slideToggle();
                $(this).toggleClass('rotate');
            })
        } else {
            pageFtitle.unbind('click');
            pageFtitle.next().removeAttr('style');
            pageFtitle.removeClass('rotate');
        }

    }

    $(window).ready(bindJsOnMobile(windowWidth)).resize(function () {
        bindJsOnMobile(window.innerWidth);
    });



    ////////////////////////////////////////// top sliders //////////////////////////////////////

    $('.top-slider-bg').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        arrows: false,
        //fade: true,
        dots: false,
        asNavFor: '.top-slider-left'
    });

    $('.top-slider-left').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        asNavFor: '.top-slider-bg',
        arrows: true,
        dots: true,
        focusOnSelect: true
    });

    $('.top-slider-right').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        arrows: false,
        dots: true

    });


    ////////////////////////////////////// four item slider /////////////////////////////////////

    $('.four-item-slider').slick({
        infinite: true,
        dots: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            }


        ]
    });

  ////////////////////////////////////// six item slider /////////////////////////////////////

    $('.six-item-slider').slick({
        infinite: true,
        dots: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 6,
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 3,
                    infinite: true
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: false
                }
            }

        ]
    });


    ////////////////////////////////////////////// scroll top ////////////////////////////////

    $('#scroller').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });

    /////////////////////////////////// fixed menu on scroll ////////////////////////

    $(document).on('scroll resize', function(){
        if($(this).scrollTop() >= 205 && $(document).width() > 1260) {
            $('.site-header').addClass('header-fixed');
            //$('body').css('padding-top', '205px');
            setTimeout(function(){
                $('.site-header').addClass('change');
            },100);
        } else {
            $('.site-header').removeClass('header-fixed');
            $('.header-menu').removeAttr("style");
            $('.site-header').removeClass('change');
            //$('body').css('padding-top', 0);
        }

    });

    //////////////////////////////////////////// masked tel input ////////////////

    $('.tel-input').mask("+38(999) 999-99-99");

    ///////////////////////////////////////////// responsive table ///////////////////

    $('.responsive-table').cardtable({
        myClass:'resp-table',
        headIndex: 2
    });

    ///////////////////////////////////////////// watch slider /////////////////////////////////


    $('.product-slider-top').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        arrows: false,
        fade: true,
        dots: false,
        asNavFor: '.product-slider-bottom'
    });

    $('.product-slider-bottom').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: false,
        asNavFor: '.product-slider-top',
        arrows: true,
        dots: false,
        focusOnSelect: true,
        centerPadding: "5px",
        responsive: [
            {
                breakpoint: 980,
                settings: {
                    slidesToShow: 3

                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    arrows: false
                }
            }
        ]
    });


    //////////////////////////////////////////////////// printer select script //////////////////////

    $('.select-printer__content').find('.step').on('click', function(e){
        var target = $(e.target);
        var that = $(this);
        var stepIndex = that.eq();
        var itemIndex = target.eq();

        console.log(stepIndex, itemIndex);

        //if($(target).closest('.step') && $(target).hasClass('step-list__item--image') || $(target).hasClass('step-list__item--title')){
        //    console.log('step', $(this).closest('.step').eq());
        //    $(target).closest('.step').removeClass('active').next('.step').addClass('active');
        //}
        //if($(target).closest('.step-one')) {
        //    $('.select-printer__nav').find('li.active').removeClass('active').next('li').addClass('active')
        //}
    });

    ////////////////////////////////// menu custom scroll bar //////////////////////////

    $('.select-cartridge__list').find('ul').mCustomScrollbar({
        theme:"scroll-bar-theme",
        setHeight: 245,
        scrollButtons:{
            enable:true,
            scrollType: "stepped",
            scrollAmount: 37
        }

    });


});