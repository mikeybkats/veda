$(document).ready(function(){
    $('.case-study-details').first().addClass('active');
    $('.featured-case-study-image').first().addClass('active');
    $('.featured-case-study-image img').first().addClass('active');

    $('.indicator-list li a').on('click', function(event){
      event.preventDefault();
      var $allImages = $('.featured-case-study-image img');
      var $target = $(event.currentTarget);
      $('.indicator-list li a').removeClass('active');

      $target.addClass('active');


      $('.indicator-list li.item').each(function(i){
        var listItemValue = i + 2;
        var imageValue = i + 1;
        var $selectedImage = $('.featured-case-study-image:nth-child(' + imageValue + ') img');

        if ($('.indicator-list li.item:nth-child(' + listItemValue + ') a').hasClass('active')){
          $('.case-study-featured .case-study-details').removeClass('active');
          $('.case-study-featured .case-study-details:nth-child(' + listItemValue + ')').addClass('active');

          $allImages.removeClass('active');
          $selectedImage.addClass('active');

          window.setTimeout(function(){
            $('.featured-case-study-image').removeClass('active');
            $('.featured-case-study-image:nth-child(' + imageValue + ')').addClass('active');
          }, 500 );
        }
      });

    });
})
