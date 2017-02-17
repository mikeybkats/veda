// This is where it all goes :)
//= require jquery

// hamburger script
$(document).ready(function(){
  $('.hamburger').on('click', function(){
    if($('.hamburger').hasClass('active')){
      $('.nav-inner').animate({
        left: "-310px"
      });
      $('.hamburger').removeClass('active');
    }else {
      $('.nav-inner').animate({
        left: "0px"
      });
      $('.hamburger').addClass('active');
    }
  });
  $('.navigation-links ul li').on('click', function(){
    $('.nav-inner').animate({
      left: "-310px"
    });
    $('.hamburger').removeClass('active');
  });
});
