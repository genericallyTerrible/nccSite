$( document ).ready(function() {
    resizeGameContainer();
    resizeClickCircles();
    $( ".clickCircle").each(function() {
        $(this).center();
    });

});

var clickCount = 1;
var multiplier = 0;

function resizeGameContainer() {
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
    resizeClickCircles();
    scrollToGame(250);
}

function resizeClickCircles(){
    $( ".clickCircle").each(function(){
        $(this).css({height: $(this).width() + "px"});
    });
}

jQuery.fn.center = function () {
    var parent = this.parent();
    var percentage = ((($(parent).height() - this.outerHeight()) / 2) + $(parent).scrollTop()) / $(parent).height() * 100 + "%"
    this.css({
        "top": percentage,
        "left": percentage
    });
    return this;
};

function scrollToGame(timeDelay) {
    $('html, body').animate({
        scrollTop: $(".contentBody").offset().top - 35
    }, timeDelay);
}

function onClick(id) {
    var sideLength = $( "#myLittleGame").height();
    var clickCircle = $( "#" + id);
    var itemW = clickCircle.width();
    var itemH = clickCircle.height();
    var fullWidth = (sideLength - itemW) / sideLength * 100 + "%";
    var fullHeight = (sideLength - itemH) / sideLength * 100 + "%";
    switch (clickCount){
        case 1:
            clickCircle.css({
                top:  0,
                left: fullWidth
            });
            break;
        case 2:
            clickCircle.center();
            clickCircle.css({
                left: fullWidth
            });
            break;
        case 3:
            clickCircle.css({
                top: fullHeight,
                left: fullWidth
            });
            break;
        case 4:
            clickCircle.css({
                top: fullHeight,
                left: 0
            });
            break;
        case 5:
            clickCircle.center();
            clickCircle.css({
                left: 0
            });
            break;
        case 6:
            clickCircle.css({
                top: 0,
                left: 0
            });
            break;
        default:
            clickCircle.center();
            clickCount = 0;
    }
    clickCount++;
}