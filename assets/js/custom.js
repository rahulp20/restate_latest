////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// jQuery
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var $ = jQuery.noConflict();
var transitionDelay = .07;
var itemsInRow = 0;
var itemsInRowArray = [];
var activeCol;
var parentElement;
var documentHeight;
var lastScrollTop = 0;
var topOffset;
var lastTopOffset;
var headerMargin;
var promotionAreaPadding;
var value;

$(document).ready(function($) {
    "use strict";

//  Bootstrap Select ---------------------------------------------------------------------------------------------------
// Bootstrap select ----------------------------------------------------------------------------------------------------

function bootstrapSelect(){
    var select = $('select');
    if (select.length > 0 ){
        select.selectpicker();
    }
    var bootstrapSelect = $('.bootstrap-select');
    var dropDownMenu = $('div.dropdown-menu');

    bootstrapSelect.on('shown.bs.dropdown', function () {
        $(this).find(dropDownMenu).removeClass('slide_out');
        $(this).find(dropDownMenu).addClass('slide_in');
    });
    bootstrapSelect.on('hide.bs.dropdown', function () {
        $(this).find(dropDownMenu).removeClass('slide_in idle');
        $(this).find(dropDownMenu).addClass('slide_out');
        //dropDownMenu.removeClass('slide_in idle');
        //dropDownMenu.addClass('slide_out');
    });
    bootstrapSelect.on('hidden.bs.dropdown', function () {
        var _this = $(this);
        $(_this).addClass('open');
        setTimeout(function() {
            $(_this).removeClass('open');
        }, 300);
    });
}


    bootstrapSelect();

//  Click Events -------------------------------------------------------------------------------------------------------

    $('.counter .plus').click(function(){
        if( !$(this).parent().parent().find('input').val() ){
            value = 1;
            $(this).parent().parent().find('input').val(value);
        }
        else {
            value++;
            $(this).parent().parent().find('input').val(value);
        }
    });

    $('.counter .minus').click(function(){
        if( $(this).parent().parent().find('input').val() == 1 || $(this).parent().parent().find('input').val() == '' ){
            value = '';
            $(this).parent().parent().find('input').val(value);
        }
        else {
            value--;
            $(this).parent().parent().find('input').val(value);
        }
    });

    $('.close').click(function(){
        if( $(this).attr('data-close-parent') ){
            var element = $(this).attr('data-close-parent');
            $('a[href="' +element+ '"]').trigger('click');
            removeAnimation(element);
            //console.log("if");
        }
        else {
            //console.log("else");
            removeAnimation($content);
            $('.submit-button').removeClass('submit-page-open');
            $grid.removeClass('idle offset-' + activeCol );
            $content.removeClass('idle');
            $('#page-wrapper').css('height','');

            if( !$('.grid').hasClass('idle') ) {
                setTimeout(function(){
                    $contentLoader.removeClass( 'idle' );
                    $contentLoader.removeClass( activeCol );
                    $('.content #loader').remove();
                    activeCol = '';
                }, 800);
            }

            var b = 0;
            $.each( itemsInRowArray, function (i) {
                setTimeout(function(){
                    b++;
                    var referenceItemOffset = $('.item:nth-child(' + b + 'n)').css('left');
                    $('.item').each(function() {
                        if( $(this).css('left') == referenceItemOffset ){
                            $(this).removeClass('stretch');
                        }
                    });
                }, i * 100);
            });
        }
        removeOffsetLeft();
    });

    $('a, button, .btn-group, .btn, .item a').click(function(){
        clickEvents(this);

    });



    $('.dropdown-menu').bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
        //console.log( 'finish' )
    });

//  No UI Slider -------------------------------------------------------------------------------------------------------

    if( $('.ui-slider').length > 0 ){
        $('.ui-slider').each(function() {
            var step;
            if( $(this).attr('data-step') ) {
                step = parseInt( $(this).attr('data-step') );
            }
            else {
                step = 10;
            }
            var sliderElement = $(this).attr('id');
            var element = $( '#' + sliderElement);
            var valueMin = parseInt( $(this).attr('data-value-min') );
            var valueMax = parseInt( $(this).attr('data-value-max') );
            $(this).noUiSlider({
                start: [ valueMin, valueMax ],
                connect: true,
                range: {
                    'min': valueMin,
                    'max': valueMax
                },
                step: step
            });
            if( $(this).attr('data-value-type') == 'price' ) {
                if( $(this).attr('data-currency-placement') == 'before' ) {
                    $(this).Link('lower').to( $(this).children('.values').children('.value-min'), null, wNumb({ prefix: $(this).attr('data-currency'), decimals: 0, thousand: '.' }));
                    $(this).Link('upper').to( $(this).children('.values').children('.value-max'), null, wNumb({ prefix: $(this).attr('data-currency'), decimals: 0, thousand: '.' }));
                }
                else if( $(this).attr('data-currency-placement') == 'after' ){
                    $(this).Link('lower').to( $(this).children('.values').children('.value-min'), null, wNumb({ postfix: $(this).attr('data-currency'), decimals: 0, thousand: ' ' }));
                    $(this).Link('upper').to( $(this).children('.values').children('.value-max'), null, wNumb({ postfix: $(this).attr('data-currency'), decimals: 0, thousand: ' ' }));
                }
            }
            else {
                $(this).Link('lower').to( $(this).children('.values').children('.value-min'), null, wNumb({ decimals: 0 }));
                $(this).Link('upper').to( $(this).children('.values').children('.value-max'), null, wNumb({ decimals: 0 }));
            }
        });
    }


});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// On Load
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(window).load(function(){
    documentHeight = $(document).height();
});
