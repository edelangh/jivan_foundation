$(document).ready(function() {
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 10)
            $("#main-logo").css({
                'width': '48px',
                'height': '48px',
            });
        else 
            $("#main-logo").css({
                'width': '64px',
                'height': '64px',
            });    
            
    });
});

/*  sidebar */

var $el, $ps, $up, totalHeight;

$(".sidebar-box .button").click(function() {

  totalHeight = 0

  $el = $(this);
  $p  = $el.parent();
  $up = $p.parent();

  $up
    .css({
      // Set height to prevent instant jumpdown when max height is removed
      "height": $up.find('description').height(),
      "max-height": 9999
    });

  // fade out read-more
  $p.addClass("hide");
  return false;

});
