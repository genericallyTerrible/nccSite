<?php include('headFunctions.php'); ?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title> <?php echo do_page_title($pageTitle); ?> </title>
    <link rel="shortcut icon" href="images/siteIco_Circular.ico" />
    <link href='http://fonts.googleapis.com/css?family=Economica:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/default.css" type="text/css" />
    <link rel='stylesheet' media='screen and (max-width: 499px)' href='css/mobile.css' />
    <link rel='stylesheet' media='screen and (min-width: 500px) and (max-width: 770px)' href='css/medium.css' />
    <link rel="stylesheet" media="only screen and (min-width: 1920px)" href="css/huge.css" />
</head>
<body id="normal">
<div id="menuBar">
    <ul id="home">
        <li class="menuItem">
            <a href="index.php" class="menuLink">Home</a>
        </li>
    </ul>
    <div id="navContainer">
        <img src="images/threeLines.gif" id="threeLines" alt="Three Lines"/>

        <?php echo generateMenu('navigation', 'nav', 'menuItem', ''); ?>

    </div>
</div>
<div id="pictureHead"> </div>
