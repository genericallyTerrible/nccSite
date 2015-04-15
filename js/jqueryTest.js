$( document ).ready(function() {
    resizeGameContainer();
    resizeClickCircles();
    var timerMultiplier = 6;
    $( ".clickCircle").each(function() {
        $(this).center();
        $(this).animate({
            opacity: 1
        }, (timerMultiplier * 500), function(){
            onClick($(this).attr("id"));
        });
        timerMultiplier--;
    });

});

var isCircleCenter = [true, true, true, true, true, true];
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
    switch (id) {
        case "red":
            if (isCircleCenter[0]) {
                clickCircle.css({
                    top: 0,
                    left: fullWidth
                });
            } else {
                clickCircle.center();
            }
            isCircleCenter[0] = !isCircleCenter[0];
            break;
        case "orange":
            if(isCircleCenter[1]) {
                clickCircle.center();
                clickCircle.css({
                    left: fullWidth
                });
            } else {
                clickCircle.center();
            }
            isCircleCenter[1] = !isCircleCenter[1];
            break;
        case "yellow":
            if(isCircleCenter[2]) {
                clickCircle.css({
                    top: fullHeight,
                    left: fullWidth
                });
            } else {
                clickCircle.center();
            }
            isCircleCenter[2] = !isCircleCenter[2];
            break;
        case "green":
            if(isCircleCenter[3]) {
                clickCircle.css({
                    top: fullHeight,
                    left: 0
                });
            } else {
                clickCircle.center();
            }
            isCircleCenter[3] = !isCircleCenter[3];
            break;
        case "blue":
            if(isCircleCenter[4]) {
                clickCircle.center();
                clickCircle.css({
                    left: 0
                });
            } else {
                clickCircle.center();
            }
            isCircleCenter[4] = !isCircleCenter[4];
            break;
        case "purple":
            if(isCircleCenter[5]) {
                clickCircle.css({
                    top: 0,
                    left: 0
                });
            } else {
                clickCircle.center();
            }
            isCircleCenter[5] = !isCircleCenter[5];
            break;
        default:
            clickCircle.center();
    }
}