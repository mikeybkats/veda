$(document).ready(function(){
    var idArray = [];
    var urlArray = [];

    function makeIdArray(){
      $('.work-categories-item a').each(function(){
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
        var idName = idArray[index];
        if(window.location.href.indexOf(urlName) > -1) {
          $selection = $(document.getElementById(idName));
          $(document.getElementById(idName)).parents('li').addClass('active');
          $selection.click();
        }
      });
    }

  // on click highlighting the nav menu item
  $('.work-categories-item a').click(function(event){
    event.preventDefault();
    $selection = $(event.currentTarget);
    $('.work-categories-item a').parents('li').removeClass('active');
    $selection.parents('li').addClass('active');

    // inputing the table title based on selection
    $('#categorySelectionTitle').text($selection.text());

    if ($selection.text() === 'View All' ||
        $selection.text() === 'Public' ||
        $selection.text() === 'Nonprofit') {

      $('.our-work .divider, .our-work .category-selection-description').hide();
    } else {
      $('.our-work .divider, .our-work .category-selection-description').show();
    }
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
    $('.category-selection-description .category-description').hide();
    $('.category-selection-description .category-description').each(function(index, item) {
      $categoryName = $(item).data('category-name');
      if ($categoryName === $selection.attr('id')){
        $(item).show();
      }
    })
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

  $('.our-work .divider, .our-work .category-selection-description').hide();
  makeIdArray();
  removeSpecialCharacters();
  selectMenuItem();
});
