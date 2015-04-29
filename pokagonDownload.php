<?php
$pageTitle = "Download"; //Title of the page displayed in the tab
$splashMessage = "<a href='downloads/EscapeToPokagon.jar' download >Download Now!</a>"; //Page's splash message
$splashGraphics = false; //Whether or not the page's splash message has the background
$freeDesign = true; //For when you don't want that beginning indent, just an empty div
$sidebar = true; //Whether or not to display the sidebar
$numberOfChanges = 3; //Number of changes to be displayed on the sidebar. Omit for default
//$onload = "Name of script to execute on body load"; //Omit for no function
$extraCss = ["css/pageSpecific/downloadPage.css"]; //Omit for no extra css
//$scripts = ["file/path/to/additional/js", "more/file/paths"]; //Omit for not extra scripts

$content = [
    //Copy this title/content array structure for the number of individual content boxes desired
    [
        //Do not modify this structure
        'title'   => 'Here\'s this little project...',
        'content' => '<div class="imageContainer"><img class="scaleImg" src="images/pokagonScreenshot.gif" alt="A screen shot of the app"/></div>'
    ]
];

include('php/_single.php');