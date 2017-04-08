(function() {
var csTimeout;
var numOfCaseStudies;

  $(document).ready(function(){
    var csIndex = 0;

    $('.case-study-details').first().addClass('display active');
    $('.featured-case-study-image').first().addClass('display active');
    $('.featured-case-study-image').first().animate({ marginLeft: "-1200px" }, 1000, function(){});
    numOfCaseStudies = $('.case-study-details').length;

    rotateCaseStudies(csIndex);

    $('.indicator-list li a').on('click', function(event) {
      event.preventDefault();
      selectActiveCaseStudy(getCaseStudyIndex());
      clearTimeout(csTimeout);
    })
  })

  function getCaseStudyIndex(){
    var caseStudyIndex = $('.indicator-list li a').get().indexOf(event.currentTarget);
    if (caseStudyIndex >= 3){
      caseStudyIndex = caseStudyIndex - 3;
    }
    // console.log(caseStudyIndex);
    return caseStudyIndex;
  }

  function selectActiveCaseStudy(index) {
    // console.log(index);
    $('.case-study-details').removeClass('display active');
    $('.featured-case-study-image').removeClass('display active');
    $('.featured-case-study-image').css('margin-left', '0px');
    $('.indicator-list li a').removeClass('active');
    $($('.case-study-details')[index]).addClass('display active');
    $($('.case-study-featured .featured-case-study-image')[index]).addClass('display active');
    $($('.case-study-featured .featured-case-study-image')[index]).animate({marginLeft: "-1200px"}, 1000, function(){});
    $($('.indicator-list li a')[index]).addClass('active');
    $($('.indicator-col-mobile .indicator-list li a')[index]).addClass('active');
  }

  function rotateCaseStudies(currentCaseStudyIndex) {
    csTimeout = setTimeout(function() {
      if (currentCaseStudyIndex === 2){
        currentCaseStudyIndex = -1;
      }
      console.log(currentCaseStudyIndex);
      selectActiveCaseStudy((currentCaseStudyIndex + 1) % numOfCaseStudies );
      rotateCaseStudies(currentCaseStudyIndex + 1);
    }, 8000)
  }
})()
