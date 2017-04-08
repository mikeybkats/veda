// hamburger script
var hadClass = false;
$(document).ready(function(){
  $('.hamburger').on('click', function(){
    $('.mobile-menu').toggleClass('active');
    if ( $('body').hasClass('menu-hover') ){
      hadClass = true;
    }
    if (hadClass === true){
      $('body').toggleClass('menu-hover');
    }
  });
  $('.navigation-links ul li a').on('click', function(){
    $('.mobile-menu').removeClass('active');
  });
});
