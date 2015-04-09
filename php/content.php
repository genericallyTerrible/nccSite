<?php include 'contentFunctions.php'; ?>
<div class="container">
<?php
    if($GLOBALS['sidebar'] == true)
        echo generateSplash() . '<div id="contentContainer">' . doContent();
    else
        echo generateSplash() . '<div id="changeContainer">' . doContentList();
?>
</div>