<?php
$pageGreeting = ' | Welcome to Chaos';

function do_page_title($pageTitle){
    return $pageTitle . $GLOBALS['pageGreeting'];
}

function do_extra_css($cssArray){
    $generatedLinks = "";
    if($cssArray)
        foreach($cssArray as $filePath){
            $generatedLinks .= '<link rel="stylesheet" type="text/css" href="' . $filePath . '" />';
        }
    return $generatedLinks;
}

function do_scripts($scriptArray){
    $generated = "";
    if($scriptArray)
        foreach($scriptArray as $filePath){
            $generated .= '<script src="' . $filePath . '"></script>';
        }
    return $generated;
}

function do_onload($scriptName){
    if($scriptName){
        return 'onload="'. $scriptName . '()"';
    }
}

include_once('_navContent.php');

function generateMenu($name, $ulClass, $liClass, $message){

    $itemsArray = $GLOBALS["$name" . 'Array'];

    $nav = '<ul class= "' . $ulClass . '" id="' . $name . '_UL" >' . $message;

    foreach ($itemsArray as $item) {
        $nav .= '<li class="' . $liClass . '">';
        if ($item['dropList'] == 'assignments')
            $nav .= generateMenu('assignments', 'dropdown', 'dropLi', '<span>Assignments &#9660;</span>') . '</li>';
        else if($item['dropList'] == 'projects')
            $nav .= generateMenu('projects', 'dropdown', 'dropLi', '<span>Projects &#9660;</span>') . '</li>';
        else {
            $nav .= '<a ';
            if ($item['linkClass'])
                $nav .= 'class = "' . $item['linkClass'] . '" ';
            if ($item['id'])
                $nav .= 'id="' . $item['id'] . '" ';
            $nav .= 'href = "' . $item['url'] . '"';
            $nav .= '>' . $item['text'] . '</a></li>';
        }
    }
    $nav .= '</ul>';
    return $nav;
}

function generateSplash(){
    $splash = '';
    $splash .= '<div id="headerContainer" ';
    if($GLOBALS['splashGraphics'])
        $splash .= 'class="splashContainer"';

    $splash .= '><div id="headerDiv">' . $GLOBALS[splashMessage] . '</div></div>';
    return $splash;
}