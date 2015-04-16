var isCircleCenter = [true, true, true, true, true, true];
var multiplier = 0;
var zIndexTracker = 7;

$( document ).ready(function() {
    resizeGameContainer();
    makeCircular();
    var timerMultiplier = 6;
    $( ".clickCircle" ).each(function() {
        $(this).center();
        $(this).animate({
            opacity: 1
        }, (timerMultiplier * 500), function(){
            onClick($(this).attr("id"));
        });
        timerMultiplier--;
    });

    $( ".clickButtonContainer" ).each(function(){
        $(this).center();
        $(this).place();
    });

    $( ".upperButton").each(function(){
        $(this).text("Slide Up");
    });

    $( ".lowerButton").each(function(){
       $(this).text("Slide Down");
    });

});

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
    makeCircular();
    scrollToGame(250);
}

function makeCircular(){
    $( ".clickCircle, .clickButtonContainer").each(function(){
        $(this).css({height: $(this).width() + "px"});
    });
}

jQuery.fn.center = function() {
    var parent = this.parent();
    var percentage = ((($(parent).height() - this.outerHeight()) / 2) + $(parent).scrollTop()) / $(parent).height() * 100 + "%";
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
                hide("#redButton");
                zIndexTracker--;
            } else {
                clickCircle.center();
                clickCircle.css({
                   "z-index": zIndexTracker++
                });
                show("#redButton");
            }
            isCircleCenter[0] = !isCircleCenter[0];
            break;
        case "orange":
            if(isCircleCenter[1]) {
                clickCircle.center();
                clickCircle.css({
                    left: fullWidth
                });
                hide("#orangeButton");
                zIndexTracker--;
            } else {
                clickCircle.center();
                clickCircle.css({
                    "z-index": zIndexTracker++
                });
                show("#orangeButton");
            }
            isCircleCenter[1] = !isCircleCenter[1];
            break;
        case "yellow":
            if(isCircleCenter[2]) {
                clickCircle.css({
                    top: fullHeight,
                    left: fullWidth
                });
                hide("#yellowButton");
                zIndexTracker--;
            } else {
                clickCircle.center();
                clickCircle.css({
                    "z-index": zIndexTracker++
                });
                show("#yellowButton");
            }
            isCircleCenter[2] = !isCircleCenter[2];
            break;
        case "green":
            if(isCircleCenter[3]) {
                clickCircle.css({
                    top: fullHeight,
                    left: 0
                });
                hide("#greenButton");
                zIndexTracker--;
            } else {
                clickCircle.center();
                clickCircle.css({
                    "z-index": zIndexTracker++
                });
                show("#greenButton");
            }
            isCircleCenter[3] = !isCircleCenter[3];
            break;
        case "blue":
            if(isCircleCenter[4]) {
                clickCircle.center();
                clickCircle.css({
                    left: 0
                });
                hide("#blueButton");
                zIndexTracker--;
            } else {
                clickCircle.center();
                clickCircle.css({
                    "z-index": zIndexTracker++
                });
                show("#blueButton");
            }
            isCircleCenter[4] = !isCircleCenter[4];
            break;
        case "purple":
            if(isCircleCenter[5]) {
                clickCircle.css({
                    top: 0,
                    left: 0
                });
                hide("#purpleButton");
                zIndexTracker--;
            } else {
                clickCircle.center();
                clickCircle.css({
                    "z-index": zIndexTracker++
                });
                show("#purpleButton");
            }
            isCircleCenter[5] = !isCircleCenter[5];
            break;
        default:
            clickCircle.center();
    }
}

jQuery.fn.place = function() {
    var sideLength = $( "#myLittleGame").height();
    var id = $(this).attr("id");
    var itemW = $(this).width();
    var itemH = $(this).height();
    var fullWidth = (sideLength - itemW) / sideLength * 100 + "%";
    var fullHeight = (sideLength - itemH) / sideLength * 100 + "%";
    switch (id) {
        case "redButton":
            $(this).css({
                top: 0,
                left: fullWidth
            });
            break;
        case "orangeButton":
            $(this).css({
                left: fullWidth
            });
            break;
        case "yellowButton":
            $(this).css({
                top: fullHeight,
                left: fullWidth
            });
            break;
        case "greenButton":
            $(this).css({
                top: fullHeight,
                left: 0
            });
            break;
        case "blueButton":
            $(this).css({
                left: 0
            });
            break;
        case "purpleButton":
            $(this).css({
                top: 0,
                left: 0
            });
            break;
    }
};

function show(id) {
    $(id).css({
        opacity: 1,
        cursor: "pointer"
    });
}

function hide(id) {
    $(id).css({
        opacity: 0,
        cursor: "auto"
    });
}

function shuffleUp(parentClasses){
    var parentColor = parentClasses.substr(21);
    $( "#" + parentColor).shuffleUp()
}

function shuffleDown(parentClasses) {
    var parentColor = parentClasses.substr(21);
    $( "#" + parentColor).shuffleDown();
}

jQuery.fn.shuffleUp = function(){
    var thisZIndex = parseInt($(this).css("z-index"));
    var thisTop = parseInt($(this).css("top"));
    var thisLeft = parseInt($(this).css("left"));
    var nextUp = checkNextUp(thisZIndex, thisTop, thisLeft);
    if(nextUp != null){
        this.animateUp(thisZIndex);
        $("#" + nextUp).animateDown(thisZIndex + 1);
    }
};

jQuery.fn.shuffleDown = function(){
    var thisZIndex = parseInt($(this).css("z-index"));
    var thisTop = parseInt($(this).css("top"));
    var thisLeft = parseInt($(this).css("left"));
    var nextDown = checkNextDown(thisZIndex, thisTop, thisLeft);
    if(nextDown != null){
        this.animateDown(thisZIndex);
        $("#" + nextDown).animateUp(thisZIndex - 1);
    }
};

function checkNextUp(thisZIndex, thisTop, thisLeft){
    var nextId = null;
    $( ".clickCircle" ).each(function() {
        var thatZIndex = parseInt($(this).css("z-index"));
        var thatTop = parseInt($(this).css("top"));
        var thatLeft = parseInt($(this).css("left"));
        if(thatZIndex == thisZIndex + 1 && thisTop == thatTop && thisLeft == thatLeft){
            nextId = ($(this).attr("id"));
            return nextId;
        }
    });
    return nextId;
}

function checkNextDown(thisZIndex, thisTop, thisLeft){
    var nextId = null;
    $( ".clickCircle" ).each(function() {
        var thatZIndex = parseInt($(this).css("z-index"));
        var thatTop = parseInt($(this).css("top"));
        var thatLeft = parseInt($(this).css("left"));
        if(thatZIndex == thisZIndex - 1 && thisTop == thatTop && thisLeft == thatLeft){
            nextId = ($(this).attr("id"));
            return nextId;
        }
    });
    return nextId;
}

jQuery.fn.animateUp = function(currentZ){
    $(this).css({
       top: 0
    });
    $(this).animate({
        "z-index": (currentZ + 1)
    }, 1000, function(){
            $(this).center()
        }
    );
};

jQuery.fn.animateDown = function(currentZ){
    var sideLength = $( "#myLittleGame").height();
    var itemH = $(this).height();
    var fullHeight = (sideLength - itemH) / sideLength * 100 + "%";
    $(this).css({
        top: fullHeight
    });
    $(this).animate({
            "z-index": (currentZ - 1)
        }, 1000, function(){
            $(this).center()
        }
    );
};