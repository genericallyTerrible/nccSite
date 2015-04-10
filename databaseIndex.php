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
                function resizeIframe(obj) {
                    obj.style.height = 0;
                    obj.style.height = obj.contentWindow.document.body.scrollHeight + 2 + "px";
                    if(obj.style.height == 8 + "px" || ((obj.style.height <= 9 + "px") && (obj.style.height >= 7 + "px" ))){
                        WarFrame.location.href = "php/database/ViewTable.php";
                    }
                    window.scrollTo(0,document.body.scrollHeight);
                }
            </script>

            <iframe scrolling="no" id="iFrame" name="WarFrame" onload="resizeIframe(this)" ></iframe>'
    ]
];

include('php/_single.php');
