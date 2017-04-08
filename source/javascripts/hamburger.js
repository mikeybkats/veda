// hamburger script
var hadClass = false;
var scroll = true;
$(document).ready(function(){
  $('.hamburger').on('click', function(){

    $('.mobile-menu').toggleClass('active');
    if ( $('body').hasClass('menu-hover') ){
      hadClass = true;
    }
    if (hadClass === true){
      $('body').toggleClass('menu-hover');
    }

    if(scroll === false){
      $('html, body').unbind('touchmove').unbind();
      scroll = true;
      return scroll;
    }

    if(scroll === true){
      $('html, body').on('touchmove', function(e){e.preventDefault()});
      scroll = false;
    }
  });

  $('.navigation-links ul li a').on('click', function(){
    $('.mobile-menu').removeClass('active');
  });

});
