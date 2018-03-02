$(document).ready(function() {
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 10)
            $(".header").css({
                'box-shadow': "0 2px 3px rgba(0,0,0,0.12), 0 2px 2px rgba(0,0,0,0.24)"
            });
        else 
            $(".header").css({
                'background-color': "#f6f3e1",
                'box-shadow' : "none"
            });    
            
    });
});