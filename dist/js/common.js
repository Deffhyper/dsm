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
        infinite: true,
        arrows: false,
        //fade: true,
        dots: false,
        asNavFor: '.top-slider-left'
    });

    $('.top-slider-left').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
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

    $('.text-section').find('table').addClass('responsive-table').cardtable({
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
        e.preventDefault();

        var target = $(e.target),
            selectPrinterNav = $('.select-printer__nav');

        if(target.closest('li').hasClass('step-list__item')) {
            target.closest('.step').not('.step.step-three').removeClass('active').next().addClass('active');
            selectPrinterNav.find('li.active:not(:last-child)').removeClass('active').next().addClass('active');
        }
        if (target.closest('.step').hasClass('step-three')){
            if (target.closest('li').hasClass('step-list__item')){

                // если последний шаг выбора формируем ссылку на товар
                location.href="https://google.com.ua";
            }
        }
        if (target.hasClass('step-list__item--back')){
            target.closest('.step').removeClass('active').prev().addClass('active');
            selectPrinterNav.find('li.active').removeClass('active').prev().addClass('active');
        }

    });

    /////////////////////////////////// cartridge select /////////////////////////////////////

    $('.step-list__item').on('click', function(e){
        if(e.target.className != "mCSB_buttonUp" || e.target.className != "mCSB_buttonDown") {
            e.preventDefault();
        }


        var target = e.target;
        if ($(target).text() && $(target).attr('href')) {
           $(this).find('.select-cartridge__title--print').text($(target).text());
        }



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

    ///////////////////////////////////////////// tablet menu /////////////////////////////////

    function tabletMenu(windowWidth) {

        if (windowWidth < 1260) {
            $('#menu-trigger').unbind('click').bind('click', function (e) {
                e.preventDefault();

                var $dropmenu = $('.site-header-bottom');

                if ($dropmenu.is(':visible')) {
                    $dropmenu.removeClass('active');
                    $('#menu-trigger').removeClass('active');
                    $('body').removeClass('main-menu-open');
                    $(document).find('.menu-blur').remove();
                } else {
                    $dropmenu.addClass('active');
                    $('#menu-trigger').addClass('active');
                    $('body').addClass('main-menu-open');
                    $('body').append('<div class="menu-blur"></div>');
                }

            });

            $('.site-header-tablet-menu').find('.top-menu').on('click', function (e) {
                var target = e.target;
                if ($(target).closest('li').hasClass('with-children')) {
                    e.preventDefault();
                    console.log('has child');
                    $(target).closest('li').find('div').eq(0).show(0, function () {

                        if(innerWidth < 767) {
                            $(this).animate({'left': 0}, 300);
                        } else {
                            $(this).animate({'left': '-20px'}, 300);
                        }


                    });
                }
                if ($(target).closest('a').hasClass('button-back')) {
                    console.log('back');
                    e.preventDefault();
                    $(target).closest('div').animate({
                        'left': '-9999px'
                    }, 300);
                }
            });

        } else {

            $('#trigger-menu').unbind('click');
            $('.main-drop-mnu__item--list').unbind('click');
            $('.main-drop-mnu__item--list').find('ul').removeAttr('style');

        }
    }

    $(window).ready(tabletMenu(windowWidth)).resize(function () {
        tabletMenu($(window).width());
    });


    ///////////////////////////////////////// close main menu

    $(window).on('click', function(e){

        if ($('.site-header-bottom').is(':visible')){

            if (innerWidth < 1280 && $(e.target).hasClass('menu-blur')) {
                console.log('close');
                $('#menu-trigger').trigger('click');
                $('.main-drop-mnu__item--list').find('ul, li').removeAttr('style');

            }
        }
    });



    ///////////////////////////// mob catalog double /////////////////////

    $('.mob-catalog-double__link').on('click', function(){
       $(this).next().slideToggle();
    });


    $("#slider-range").slider({
        range: true,
        min: 2790,
        max: 580800,
        values: [2790, 580800],
        slide: function (event, ui) {
            $("#amount-max").val(ui.values[1]);
            $("#amount-min").val(ui.values[0]);
        }
    });

    $("#amount-max").val($("#slider-range").slider("values", 1));
    $("#amount-min").val($("#slider-range").slider("values", 0));

    $("#amount-max, #amount-min").on('blur', function(){
        var aMax = $('#amount-max').val();
        var aMin = $('#amount-min').val();
        var absolutMin = Number($("#slider-range").slider("option", "min"));

        if(aMin > aMax){
            $("#slider-range").slider("values", [aMin, aMin]);
            $("#amount-min").val(absolutMin);

        } else {
            $("#slider-range").slider("values", [aMin, aMax]);

        }
    });


    //////////////////////////////// goods compare ////////////////////////////////////////////////////

    $('.compare-link').on('click', function(e){
        e.preventDefault();

        if(!$(this).hasClass('active')) {
            $(this).addClass('active');
            $(this).find('.tooltip span').text('в сравнении');
        } else {
            $(this).removeClass('active');
            $(this).find('.tooltip span').text('добавить в сравнение');
        }

    });

    ///////////////////////////////////// goods filter ///////////////////////////////////////////////

    $('.catalog__sort--list').find('li').on('click', function(e){
        if($(this).hasClass('active')){
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
        }
    });



    function bindJsOnFilterSelectTablet(windowWidth) {
        var catalogSort = $('.catalog__sort--list');
        var allOptions = catalogSort.children('li:not(.init)');

        if (windowWidth < 992) {
            catalogSort.unbind('click').on("click", ".init", function(e) {
                e.preventDefault();
                $(this).toggleClass('open');
                $(this).closest("ul").children('li:not(.init)').slideToggle();
            });

            catalogSort.on("click", "li:not(.init)", function(e) {
                e.preventDefault();
                allOptions.removeClass('selected');
                $(this).addClass('selected');
                catalogSort.children('.init').html($(this).html());
                allOptions.slideToggle();
                catalogSort.find('.init').removeClass('open');
            });
        } else {
            catalogSort.unbind('click');
            catalogSort.find('li').removeAttr('style');
        }



    }

    $(window).ready(bindJsOnFilterSelectTablet(windowWidth)).resize(function () {
        bindJsOnFilterSelectTablet(window.innerWidth);
    });


    ////////////////////////////////////////// mobile screen catalog subcategory ////////////////////////////

    if($('.sub-category__wrapper').length && $('.sidebar__list-wrapper').length){
        $('.sub-category__wrapper').clone().insertAfter('.sidebar__list-wrapper');
    }

    $('.category-mob-title').on('click', function(e){
        e.preventDefault();
        $(this).next().slideToggle();
        $(this).toggleClass('open');
    });




});