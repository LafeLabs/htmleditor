<?php
/* javascript this pairs with:

document.getElementById("rmdirButton").onclick = function(){
    dirname = document.getElementById("rmdirInput").value;
    var httpc = new XMLHttpRequest();
    var url = "mkdir.php";        
    httpc.open("POST", url, true);
    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpc.send("dirname=" + dirname);//send data to saver.php
}

*/
$dirname = $_POST["dirname"]; //get data 
rmdir($dirname);
?>