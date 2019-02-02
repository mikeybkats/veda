$(document).ready(function() {

  var newsItems = $(".news-banner .news-item")
  var newsItemIndex = 0;
  var newsIndicator = $('.news-banner .news-indicator')
  var cycler;

  function hideItems() {
    $(newsItems).removeClass('display');
    $(newsItems).find('a').css('display', 'none');
    $(newsIndicator.find('a')).removeClass('active')
  }

  function showItem(index) {
    $(newsItems[index]).addClass('display');
    $(newsItems[index]).find('a').css('display', 'inline');
    $(newsIndicator.find('a')[index]).addClass('active')
    if($('body').hasClass('has-news-banner')) {

      var newsBannerHeight = parseInt($('.news-banner').css('height').replace('px', ''), 10)

      $('.menu-hover .logo-mobile').css('top', newsBannerHeight + 37 + "px" );
    }
  }

  function buildIndicatorList(items) {
    items.each(function (index, item) {
      newsIndicator.append(`
        <li class="item"><a href="#" class="indicator indicator-%{index}"></a></li>
        `)

    })
    newsIndicator.find('a').click(function (e) {
      clearInterval(cycler)
      hideItems();
      showItem(newsIndicator.find('a').index(e.currentTarget))
    })
  }
  function modifyNewsItems(items) {
    newsItems.each(function (index, item) {
      $(item).find('a').append(" &#8594;")

    })
    showItem(0);
  }


  function cycleNewsItems(items, indicator, index) {
    var mod = newsItems.length;
    hideItems();
    var currentIndex = index % mod;
    showItem(currentIndex)
  }

  if(window.location.pathname === "/" && newsItems.length > 0) {
    $('body').addClass('has-news-banner')
    if(newsItems.length > 1) {
      buildIndicatorList(newsItems);
    }
    modifyNewsItems(newsItems);

    hideItems();
    showItem(newsItemIndex);
    cycler = setInterval(
      function () {
        newsItemIndex += 1
        cycleNewsItems(newsItems, newsIndicator, newsItemIndex);
      }, 6000);
  }

})
