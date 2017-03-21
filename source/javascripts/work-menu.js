$(document).ready(function(){
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
      // console.log($selection.attr('id'));
      // console.log($categoryName);

      if ($categoryName === $selection.attr('id')){
        $(this).removeClass('hidden');
      }
      if ($categoryName != $selection.attr('id')){
        $(this).addClass('hidden');
      }
      if($selection.attr("id") === "all") {
        $('.category-image-sets .row').first().removeClass('hidden');
      }

    });

  });

  // load photo row for view all
  $('.category-image-sets .row').first().removeClass('hidden');

});
