<?php
include('sidebarFunctions.php');
include('_siteChanges.php');
if($GLOBALS['numberOfChanges'] == null){
    $numberOfChanges = -1; //Will display all changes
}
$numberOfChanges = $GLOBALS['numberOfChanges'];
$generated = '<div id="changeLog">
        <div class="contentHead">
            Changes:
        </div>
        <div class="contentBody">' . generateSidebar($changes, $numberOfChanges) . '<div id="fullChangeDiv">
                <a href="changes.php">More changes...</a>
            </div>
        </div>
    </div>';

echo $generated;