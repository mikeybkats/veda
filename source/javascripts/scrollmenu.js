
var $caseStudy = $('.case-study-featured');
var $hero = $('.hero');

function isElementInViewport (el) {
  if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }

  var rect = el.getBoundingClientRect();
  console.log(rect);

  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
    rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
  );
}

function onVisibilityChange(el, callback) {
    return function () {
      var old_visible = false;
      var visible = isElementInViewport(el);
      console.log(visible);
      console.log(old_visible);
      if (visible != old_visible) {
        old_visible = visible;
        if (typeof callback == 'function') {
          callback();
        }
      }
    }
}

var handler = onVisibilityChange( $hero , function() {
  /* your code go here */
  $('body').removeClass('menu-hover');
});

//jQuery
$(window).on('DOMContentLoaded load resize scroll', handler);
