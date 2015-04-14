<?php
$pageTitle = "JQuery"; //Title of the page displayed in the tab
$splashMessage = "JQuery Fun"; //Page's splash message
$splashGraphics = false; //Whether or not the page's splash message has the background
$sidebar = true; //Whether or not to display the sidebar
$freeDesign = true; //For when you don't want that beginning indent, just an empty div
$numberOfChanges = 4; //Number of changes to be displayed on the sidebar. Omit for default
$extraCss = ["css/pageSpecific/jqueryTest.css"]; //Omit for no extra css
$scripts = ["http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js", "js/jqueryTest.js"]; //Omit for not extra scripts

$content = [
    //Copy this title/content array structure for the number of individual content boxes desired
    [
        //Do not modify this structure
        'title'   => 'JQuery',
        'content' => '
        <div id="myLittleGame">
            <div id="clickMe">Click Me</div>
            <div id="myLittleToy"></div>
        </div>
        <script>
            $(window).resize(function() {
                resizeContainer();
            });
        </script>
        '
    ]
];

include('php/_single.php');