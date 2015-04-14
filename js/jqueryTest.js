$( document ).ready(function() {
    resizeContainer();
    scrollToGame(2000);
});

function resizeContainer() {
    var container = $( "#myLittleGame");
    var maxDimension;
    var multiplier = 3;
    var viewportWidth = $(window).width();
    var viewportHeight = $(window).height();

    if(viewportHeight >= viewportWidth)
        maxDimension = viewportWidth;
    else
        maxDimension = viewportHeight;

    if(viewportWidth >= 900)
        multiplier = 6;
    else if(viewportWidth >= 770)
        multiplier = 5;
    else if (viewportWidth >= 500)
        multiplier = 3;
    else
        multiplier = 2;

    maxDimension -= (maxDimension/multiplier);
    container.css({
        "width": maxDimension + "px",
        "height": maxDimension + "px"
    });
    resizeClickMe(multiplier);
}

function resizeClickMe(multiplier){
    $( "#clickMe" ).css({"font-size": (multiplier * 10) + "px"});
}

function scrollToGame(timeDelay) {
    $('html, body').animate({
        scrollTop: $(".contentHead").offset().top
    }, timeDelay);
}