$(document).ready(function(){
  var path = window.location.pathname;
    path = path.replace(/\/$/, "");
    path = '..' + path + '/';

    $('.navigation-links a').each(function () {
        var href = $(this).attr('href');

        if (path.substring(0, href.length) === href) {
            $(this).closest('li a').addClass('active');
        }
    });
});
