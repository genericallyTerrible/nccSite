<?php
$u = array(
    'open'  => '<u>(',
    'close' => ')</u>'
);

$li = array(
    'open'  => '<li>',
    'close' => '</li>'
);

function generateSidebar($changes, $numberToDisplay){
    $sideBar = '';
    $changesDisplayed = $numberToDisplay;
    foreach ($changes as $update) {
        if($changesDisplayed == 0) {
            break;
        }
        $changesDisplayed--;
        $counter = 0;
        $sideBar .= '<ul>';
        foreach ($update as $change) {
            if ($counter == 0)
                $sideBar .= $GLOBALS['u']['open'] . $change . $GLOBALS['u']['close'];
            else
                $sideBar .= $GLOBALS['li']['open'] . $change['shortChange'] . $GLOBALS['li']['close'];
            $counter++;
        }
        $sideBar .= '</ul>';
    }
    return $sideBar;
}
?>