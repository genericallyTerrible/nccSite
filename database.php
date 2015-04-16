<?php
$pageTitle = "SQL Table";
$splashMessage = "My Super SQL Table";
$splashGraphics = false;
$freeDesign = true;
$sidebar = true;
$numberOfChanges = 2;
$extraCss = ["css/pageSpecific/database.css"]; //Omit for no extra css
$scripts = ["http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js","js/databaseFunctions.js"]; //Omit for not extra scripts
include "php/database/_sqlFunctions.php";

$content = [
    [
        'title'   => doTableLinks(),
        'content' => doIFrame()
    ]
];

include('php/_single.php');
