//remove slashes
var pathString = location.pathname;

// console.log(pathString);

function removeSlashCharacters(){
  while(pathString.indexOf('/') > -1){
    pathString = pathString.replace('/', '');
  }
  return pathString;
};
removeSlashCharacters();

// console.log(pathString);

if( pathString === 'the-veda-way.php'){
  function offsetAnchor() {
    if (location.hash.length !== 0) {
      window.scrollTo(window.scrollX, window.scrollY - 100);
    }
  }

  // Captures click events of all <a> elements with href starting with #
  $(document).on('click', 'a[href^="#"]', function(event) {
    // Click events are captured before hashchanges. Timeout
    // causes offsetAnchor to be called after the page jump.
    window.setTimeout(function() {
      offsetAnchor();
    }, 0);
  });



  // Set the offset when entering page with hash present in the url
  window.setTimeout(offsetAnchor, 0);
}
