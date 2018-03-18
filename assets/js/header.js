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

