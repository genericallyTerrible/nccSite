var iteration = 1;
$(document).ready(function(){
    $("#threeLines").click(function() {
        var nav = $(".nav");
        var menuBar = $("#menuBar");
        switch (iteration) {
            case 1:
                $(this).css({
                    "background-color": "rgba(25,25,25,0.5)"
                });
                menuBar.css({
                    //"position": "relative",
                });
                nav.css({
                    "display": "block"
                });
                break;
            case 2:
                $(this).css({
                    "background-color": "initial"
                });
                nav.css({
                    "display": "none"
                });
                break;
        }
        iteration++;
        if (iteration > 2)
            iteration = 1;
    });
});