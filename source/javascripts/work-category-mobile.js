$(document).ready(function(){
  $(".mobile-dropdown").on("click", function(event){
    $(".work-categories-menu").toggleClass('open');
  })
  $('.work-categories-menu li a').on('click', function(event){
    $menuTextSelected = $(event.currentTarget).text();
    $('.mobile-dropdown p').text($menuTextSelected)
    $(".work-categories-menu").toggleClass('open');

  })
})
