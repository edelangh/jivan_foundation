$(document).ready(function() {
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 10)
            $(".header").css({
                'padding-top': '1em',
                'padding-bottom': '1em',
            });
        else 
            $(".header").css({
                'padding-top': '2em',
                'padding-bottom': '2em',
            });    
            
    });
    showDivs();
    window.setInterval(() => plusDivs(1), 5000);
});


var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("img-slide");
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length};
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
        x[i].style.display = "none"; 
    }
    x[slideIndex-1].style.display = "block"; 
}

$('.carousel').carousel();
