$( document ).ready(function() {
    resizeContainer();
});

var clickCount = 0;
var multiplier = 0;

function resizeContainer() {
    var container = $( "#myLittleGame");
    var maxDimension;
    multiplier = 3;
    var viewportWidth = $(window).width();
    var viewportHeight = $(window).height();

    if(viewportHeight >= viewportWidth)
        maxDimension = viewportWidth;
    else
        maxDimension = viewportHeight;

    if(viewportWidth >= 850)
        multiplier = 6;
    else if(viewportWidth >= 750)
        multiplier = 5;
    else if (viewportWidth >= 550)
        multiplier = 3;
    else
        multiplier = 2;

    maxDimension -= (maxDimension/multiplier);
    container.css({
        "width": maxDimension + "px",
        "height": maxDimension + "px"
    });
    resizeClickMe();
    centerClickMe();
    scrollToGame(250);
    clickCount = 0;
}

function resizeClickMe(){
    $( "#clickMe" ).css({"font-size": (multiplier * 10) + "px"});
}

function scrollToGame(timeDelay) {
    $('html, body').animate({
        scrollTop: $(".contentHead").offset().top
    }, timeDelay);
}

function centerClickMe() {
    var sideLength = $( "#myLittleGame").height();
    var clickMe = $( "#clickMe" );
    var itemW = clickMe.width();
    var itemH = clickMe.height();
    clickMe.css({
        WebkitTransition : 'top 1s ease-in-out, left 1s ease-in-out',
        MozTransition    : 'top 1s ease-in-out, left 1s ease-in-out',
        MsTransition     : 'top 1s ease-in-out, left 1s ease-in-out',
        OTransition      : 'top 1s ease-in-out, left 1s ease-in-out',
        transition       : 'top 1s ease-in-out, left 1s ease-in-out',
        top:  ((0.5 * sideLength) - (0.5 * itemH)) + (2 / multiplier) + "px",
        left: ((0.5 * sideLength) - (0.5 * itemW)) + (2 / multiplier) + "px"
    })
}

function onClick() {
    var sideLength = $( "#myLittleGame").height();
    var clickMe = $( "#clickMe" );
    var itemW = clickMe.width();
    var itemH = clickMe.height();
    switch (clickCount){
        case 0:
            clickMe.css({
                top:   0 + "px",
                left: 10 + "px"
            });
            break;
        case 1:
            clickMe.css({
                left: (sideLength - itemW) + "px"
            });
            break;
        case 2:
            clickMe.css({
                top: (sideLength - itemH + 10) + "px"
            });
            break;
        case 3:
            clickMe.css({
                left: 0 + "px"
            });
            break;
        case 4:
            clickMe.css({
                top: 0
            });
            clickCount = 0;
            break;
        default:
            centerClickMe();
    }
    clickCount++;
}