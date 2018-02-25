$(document).ready(function() {
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 130)
            $(".header").css({
                'background-color': "#f0eac9",
                'box-shadow': "0 1px 2px rgba(0,0,0,0.12), 0 1px 1px rgba(0,0,0,0.24)"
            });
        else 
            $(".header").css({
                'background-color': "#f6f3e1",
                'box-shadow' : "none"
            });    
            
    });
});