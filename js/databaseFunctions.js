function resizeIframe(obj) {
    obj.style.height = 0;
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 2 + "px";
    if(obj.style.height == 10 + "px" || ((obj.style.height <= 11 + "px") && (obj.style.height >= 9 + "px" ))){
        WarFrame.location.href = "php/database/ViewTable.php";
    }
    window.scrollTo(0, (document.getElementById("pictureHead").scrollHeight + 140));
}