$(document).ready(function() {
 
    var div = $('header');
    var logo = $('.logo-img'); 
    var regular = $('.regular-logo'); 
    var white = $('.white-logo'); 
    var upperNav = $('.upper-nav'); 
    var mainNav = $('.main-nav a'); 
    var rad = $('.rad'); 
    var start = $(div).offset().top;
 
    $.event.add(window, "scroll", function() {
        var p = $(window).scrollTop();
        $(regular).css('display',((p)>start) ? 'block' : '');
        $(white).css('display',((p)>start) ? 'none' : '');
        $(div).css('position',((p)>start) ? 'fixed' : 'static');
        $(div).css('top',((p)>start) ? '0px' : '');
        $(div).css('z-index',((p)>start) ? '999999' : '');
        $(div).css('width',((p)>start) ? '100%' : '');
        $(div).css('height',((p)>start) ? '75px' : '');
        $(div).css('background',((p)>start) ? '#FFFFFF' : '');
        $(div).css('box-shadow',((p)>start) ? '0 2px 3px rgba(0,0,0,.3)' : '');
        $(div).css('-webkit-box-shadow',((p)>start) ? '0 2px 3px rgba(0,0,0,.3)' : '');
        $(div).css('-moz-box-shadow',((p)>start) ? '0 2px 3px rgba(0,0,0,.3)' : '');
        $(div).css('-ms-box-shadow',((p)>start) ? '0 2px 3px rgba(0,0,0,.3)' : '');
        $(div).css('transition',((p)>start) ? '0.3s ease' : '');    
        $(upperNav).css('display',((p)>start) ? 'none' : '');    
        $(mainNav).css('color',((p)>start) ? '#6B6B6B' : '');    
        $(rad).css('background',((p)>start) ? '#28B29A' : '');    
        $(rad).css('border',((p)>start) ? 'none' : '');    
        $(rad).css('color',((p)>start) ? '#FFFFFF' : '');    
        $(rad).css('box-shadow',((p)>start) ? 'black 0px 1px 5px -1px' : '');      
    });
 
});
