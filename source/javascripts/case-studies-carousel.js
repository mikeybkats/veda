(function() {
var csTimeout;
var numOfCaseStudies;
$(document).ready(function(){
    var csIndex = 0;

    $('.case-study-details').first().addClass('display active');
    $('.featured-case-study-image').first().addClass('display active');
    numOfCaseStudies = $('.case-study-details').length

    rotateCaseStudies(csIndex);
    $('.indicator-list li a').on('click', function(event) {
      event.preventDefault();
      selectActiveCaseStudy($('.indicator-list li a').get().indexOf(event.currentTarget));
      clearTimeout(csTimeout);
    })
  })
  function selectActiveCaseStudy(index) {
    $('.case-study-details').removeClass('display active');
    $('.featured-case-study-image').removeClass('display active');
    $('.indicator-list li a').removeClass('active');
    $($('.case-study-details')[index]).addClass('display active');
    $($('.case-study-featured .featured-case-study-image')[index]).addClass('display active');
    $($('.indicator-list li a')[index]).addClass('active')

  }

  function rotateCaseStudies(currentCaseStudyIndex) {
    csTimeout = setTimeout(function() {
      selectActiveCaseStudy((currentCaseStudyIndex + 1) % numOfCaseStudies );
      rotateCaseStudies(currentCaseStudyIndex + 1);
    }, 3000)
  }
})()
  //$('.case-study-details').first().removeClass('display').addClass('active');
  // $('.featured-case-study-image').first().addClass('active');
  // $('.featured-case-study-image img').first().addClass('active');
  //
  // $('.indicator-list li a').on('click', function(event){
  //   event.preventDefault();
  //   var $allImages = $('.featured-case-study-image img');
  //   var $target = $(event.currentTarget);
  //   $('.indicator-list li a').removeClass('active');
  //
  //   $target.addClass('active');
  //
  //
  //   $('.indicator-list li.item').each(function(i){
  //     var listItemValue = i + 2;
  //     var imageValue = i + 1;
  //     var $selectedImage = $('.featured-case-study-image:nth-child(' + imageValue + ') img');
  //
  //     if ($('.indicator-list li.item:nth-child(' + listItemValue + ') a').hasClass('active')){
  //       $('.case-study-featured .case-study-details').removeClass('active');
  //
  //       setTimeout(function(){
  //         $('.case-study-details').addClass('display');
  //         $('.case-study-details:nth-child(' + listItemValue + ')').removeClass('display');
  //       }, 500 );
  //       $('.case-study-featured .case-study-details:nth-child(' + listItemValue + ')').addClass('active');
  //
  //       $allImages.removeClass('active');
  //       $selectedImage.addClass('active');
  //
  //       setTimeout(function(){
  //         $('.featured-case-study-image').removeClass('active');
  //         $('.featured-case-study-image:nth-child(' + imageValue + ')').addClass('active');
  //       }, 500 );
  //     }
  //   });
  //
  // });
