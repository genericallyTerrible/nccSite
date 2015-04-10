<?php
$pageTitle = "SQL Table";
$splashMessage = "My Super SQL Table";
$splashGraphics = false;
$freeDesign = true;
$sidebar = true;
$numberOfChanges = 2;

include "php/database/_sqlFunctions.php";

$content = [
    [
        'title'   => doTableLinks(),
        'content' => '
            <script type="text/javascript">
                function resizeIframe(obj,pictureHead2) { pictureHead2=pictureHead2||pictureHead;
                    obj.style.height = 0;
                    obj.style.height = obj.contentWindow.document.body.scrollHeight + "px";
                    if(obj.style.height <= 10 + "px" && obj.style.height > 0 + "px"){
                        WarFrame.location.href = "php/database/ViewTable.php";
                    }
                    var $pictureHead = document.getElementById("pictureHead");
                    window.scrollTo(0, $pictureHead.scrollHeight + 40);
                }
            </script>

            <iframe id="iFrame" name="WarFrame" onload="resizeIframe(this)" ></iframe>'
    ]
];

include('php/_single.php');