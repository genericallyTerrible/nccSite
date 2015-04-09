<?php
function doContent(){
    $formated ='';
    foreach($GLOBALS['content'] as $content){
        $formated .=
            '<div class="content"><div class="contentHead">'
                . $content['title'] .
            '</div><div class="contentBody">';
        if($GLOBALS['freeDesign'] != true){
            $formated .= '&nbsp;&nbsp;&nbsp;&nbsp;';
        }
        $formated .= $content['content'] . '</div></div>';
    }
    return $formated;
}

function doContentList(){
    $formated = '';
    foreach($GLOBALS['content'] as $content){
        $formated .= '<div class="content">';
        $isFirstTime = true;
        foreach($content as $item){
            if($isFirstTime)
                $formated .= '<div class="contentHead">' . $item . '</div><div class="contentBody"><ul class="changeList">';
            else
                $formated .= '<li>' . $item['fullChange'] . '</li>';
            $isFirstTime = false;
        }
        $formated .= '</ul></div></div>';
    }
    return $formated;
}
?>