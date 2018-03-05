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
    showDivs();
    window.setInterval(() => plusDivs(1), 1000);
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
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    x[slideIndex-1].style.display = "block"; 
}
