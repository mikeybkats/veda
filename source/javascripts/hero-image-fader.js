$(document).ready(function(){

  $backgroundArray = $('.hero-background')
  $backgroundArray.first().addClass('fade');
  var fadeIndex = 0;
  function crossFade(fadeIndex) {
    $backgroundArray.removeClass('override-transition');
    setTimeout(function() {
      var numOfItems = $backgroundArray.length;
      $($backgroundArray[fadeIndex % numOfItems]).removeClass('fade');
       $($backgroundArray[(fadeIndex + 1) % numOfItems]).addClass('fade');
      // console.log(fadeIndex % 3);
      crossFade(fadeIndex + 1);

    }, 3000)
  }

    crossFade(fadeIndex);

  });
