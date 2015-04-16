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
        'title'   => 'Color Circles',
        'content' => '
        <div id="myLittleGame">
            <div class="clickCircle purple" id="purple"></div>
            <div class="clickCircle blue"   id="blue"></div>
            <div class="clickCircle green"  id="green"></div>
            <div class="clickCircle yellow" id="yellow"></div>
            <div class="clickCircle orange" id="orange"></div>
            <div class="clickCircle red"    id="red"></div>
            <div class="clickButtonContainer purple" id="purpleButton"><div class="clickButton upperButton"></div><div class="clickButton lowerButton"></div></div>
            <div class="clickButtonContainer blue"   id="blueButton"><div class="clickButton upperButton"></div><div class="clickButton lowerButton"></div></div>
            <div class="clickButtonContainer green"  id="greenButton"><div class="clickButton upperButton"></div><div class="clickButton lowerButton"></div></div>
            <div class="clickButtonContainer yellow" id="yellowButton"><div class="clickButton upperButton"></div><div class="clickButton lowerButton"></div></div>
            <div class="clickButtonContainer orange" id="orangeButton"><div class="clickButton upperButton"></div><div class="clickButton lowerButton"></div></div>
            <div class="clickButtonContainer red"    id="redButton"><div class="clickButton upperButton"></div><div class="clickButton lowerButton"></div></div>
        </div>
        <script>
            $( window ).resize(function() {
                resizeGameContainer();
            });
            $(".clickCircle").click(function() {
                onClick($(this).attr("id"));
            });
            $(".upperButton").click(function() {
                shuffleUp($(this).parent().attr("class"));
            });
            $(".lowerButton").click(function() {
                shuffleDown($(this).parent().attr("class"));
            })
        </script>
        '
    ]
];

include('php/_single.php');