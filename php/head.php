<?php include('headFunctions.php'); ?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title> <?php echo do_page_title($pageTitle); ?> </title>
    <link rel="shortcut icon" href="images/siteIco_Circular.ico" />
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Economica:400,700'>
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel='stylesheet' type="text/css" media='screen and (max-width: 499px)' href='css/mobile.css' />
    <link rel='stylesheet' type="text/css" media='screen and (min-width: 500px) and (max-width: 770px)' href='css/medium.css' />
    <link rel="stylesheet" type="text/css" media="only screen and (min-width: 1920px)" href="css/huge.css" />
    <?php echo do_extra_css($extraCss); ?>
    <?php echo do_scripts  ($scripts);  ?>
</head>
<body id="normal" <?php echo do_onload($onLoad); ?>>
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
