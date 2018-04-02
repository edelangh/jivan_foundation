$(document).ready(function() {
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 10) {
            $("#main-logo").css({
                'width': '48px',
                'height': '48px',
            });
            $(".navbar").css({
                'font-size': '.8em',
            });
            $(".dropdown-item").css({
                'font-size': '1em',
            });
            $("#head-donate").css({
                'font-size': '12px',
            });
        } else { 
            $("#main-logo").css({
                'width': '64px',
                'height': '64px',
            });
            $(".navbar").css({
                'font-size': '1em',
            });
            $(".dropdown-item").css({
                'font-size': '1.2em',
            });
            $("#head-donate").css({
                'font-size': '16px',
            });
        }
    });

    resize();
    window.onresize = function(event) {
        resize();
    };    
});

function resize() {

    if (parseInt($("body").css("width")) >= 750) {
    $(".hidden-mob").each(function( index ) {
        $( this ).css({"display": "initial"});
    });
    }
    else
    {
    $(".hidden-mob").each(function( index ) {
        $( this ).css({"display": "none"});
    });
    }
}

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
