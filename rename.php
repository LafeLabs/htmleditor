<?php
/* javascript this pairs with:

document.getElementById("renameButton").onclick = function(){
    oldname = document.getElementById("renameInput1").value;
    newname = document.getElementById("renameInput2").value;
    var httpc = new XMLHttpRequest();
    var url = "rename.php";        
    httpc.open("POST", url, true);
    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpc.send("oldname=" + oldname + "&newname=" + newname);//send data to saver.php
}

*/
$oldname = $_POST["oldname"]; //get data 
$newname = $_POST["newname"]; //get data 
rename($oldname,$newname);
?>