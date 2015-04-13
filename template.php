<?php
$pageTitle = "Home"; //Title of the page displayed in the tab
$splashMessage = "Welcome"; //Page's splash message
$splashGraphics = true; //Whether or not the page's splash message has the background
$sidebar = true; //Whether or not to display the sidebar
$numberOfChanges = 4; //Number of changes to be displayed on the sidebar. Omit for default
$content = [
            //Copy this title/content array structure for the number of individual content boxes desired
            [
                //Do not modify this structure
                'title'   => 'title displayed',
                'content' => 'content displayed'
            ]
];

include('php/_single.php');