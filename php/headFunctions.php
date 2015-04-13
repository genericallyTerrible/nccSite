<?php
$pageGreeting = ' | Welcome to Chaos';

function do_page_title($pageTitle){
    return $pageTitle . $GLOBALS['pageGreeting'];
}

include_once('_navContent.php');

function generateMenu($name, $ulClass, $liClass, $message){

    $itemsArray = $GLOBALS["$name" . 'Array'];

    $nav = '<ul class= "' . $ulClass . '" >' . $message;

    foreach ($itemsArray as $item) {
        $nav .= '<li class="' . $liClass . '">';
        if ($item['method'] == 'special')
            $nav .= generateMenu('assignments', 'dropdown', 'dropLi', '<span>Assignments &#9660;</span>') . '</li>';
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