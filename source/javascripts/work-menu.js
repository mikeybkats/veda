$(document).ready(function(){
    var idArray = [];
    var urlArray = [];

    function makeIdArray(){
      $('.work-categories-menu a').each(function(){
        idArray.push($(this).attr('id'));
      });
    }

    function removeSpecialCharacters(){
      $(idArray).each(function(index){
        var string = idArray[index]
        while(string.indexOf('_') > -1){
          string = string.replace('_', '-');
        }
        urlArray.splice( index , 1, string);
        return urlArray;
      });
    }

    function selectMenuItem(){
      $(urlArray).each(function(index){
        var urlName = urlArray[index];
        console.log(urlName);
        var idName = idArray[index];
        // console.log(window.location.href.indexOf(urlName));
        if(window.location.href.indexOf(urlName) > -1) {
          $selection = $(document.getElementById(idName));
          $(document.getElementById(idName)).parents('li').addClass('active');
          // console.log($selection);
          $selection.click();
        }
      });
    }

  // on click highlighting the nav menu item
  $('.work-categories-menu a').click(function(event){
    event.preventDefault();
    $selection = $(event.currentTarget);
    $('.work-categories-menu a').parents('li').removeClass('active');
    $selection.parents('li').addClass('active');

    // inputing the table title based on selection
    $('#categorySelectionTitle').text($selection.text());

    if ($selection.text() === 'View All'){
      $('#categorySelectionTitle').text('');
    }

    // hiding the job based on the selection
    $('.job').each(function(index){
      $job = $(this);
      $job.removeClass("hidden")
      if($selection.attr("id") === "all") {
        return
      }
      if($job.data('tag').indexOf($selection.attr("id")) === -1) {
        $job.addClass("hidden")
      }
    });

    // matching the photo row with the selection
    $('.category-image-sets .row').each(function(){
      $categoryName = $(this).data('category-name');

      if ($categoryName === $selection.attr('id')){
        $(this).removeClass('hidden');
      }
      if ($categoryName != $selection.attr('id')){
        $(this).addClass('hidden');
      }
      if($selection.attr("id") === "all") {
        $('.category-image-sets .row').first().addClass('hidden');
      }
    });

  });

  makeIdArray();
  removeSpecialCharacters();
  selectMenuItem();
});
