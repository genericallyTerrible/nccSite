<?php
$pageTitle = "SQL Table";
$splashMessage = "My Super SQL Table";
$splashGraphics = false;
$freeDesign = true;
$sidebar = true;
$numberOfChanges = 2;
$extraCss = ["css/pageSpecific/database.css"]; //Omit for no extra css
include "php/database/_sqlFunctions.php";

$content = [
    [
        'title'   => doTableLinks(),
        'content' => '
            <script type="text/javascript">
                function resizeIframe(obj) {
                    obj.style.height = 0;
                    obj.style.height = obj.contentWindow.document.body.scrollHeight + 2 + "px";
                    if(obj.style.height == 10 + "px" || ((obj.style.height <= 11 + "px") && (obj.style.height >= 9 + "px" ))){
                        WarFrame.location.href = "php/database/ViewTable.php";
                    }
                    window.scrollTo(0, (document.getElementById("pictureHead").scrollHeight + 140));
                }
            </script>

            <iframe scrolling="no" id="iFrame" name="WarFrame" onload="resizeIframe(this)" ></iframe>'
    ]
];

include('php/_single.php');
