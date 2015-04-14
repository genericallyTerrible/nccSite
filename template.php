<?php
$pageTitle = "Home"; //Title of the page displayed in the tab
$splashMessage = "Welcome"; //Page's splash message
$splashGraphics = true; //Whether or not the page's splash message has the background
$freeDesign = true; //For when you don't want that beginning indent, just an empty div
$sidebar = true; //Whether or not to display the sidebar
$numberOfChanges = 4; //Number of changes to be displayed on the sidebar. Omit for default
$onload = "Name of script to execute on body load"; //Omit for no function
$extraCss = ["file/path/to/additional/css", "more/file/paths"]; //Omit for no extra css
$scripts = ["file/path/to/additional/js", "more/file/paths"]; //Omit for not extra scripts

$content = [
            //Copy this title/content array structure for the number of individual content boxes desired
            [
                //Do not modify this structure
                'title'   => 'title displayed',
                'content' => 'content displayed'
            ]
];

include('php/_single.php');