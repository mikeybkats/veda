// hamburger script
$(document).ready(function(){
  $('.hamburger').on('click', function(){
    $('.mobile-menu').toggleClass('active')
  });
  $('.navigation-links ul li').on('click', function(){
    $('.mobile-menu').removeClass('active');
  });
});
