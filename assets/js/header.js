$(document).ready(function() {
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 350)
            $(".header").css({'background-color': "#c8b5ac"});
        else 
            $(".header").css({'background-color': "#f6f3e1"});    
    });
});