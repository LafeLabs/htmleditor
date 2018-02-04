<?php
/* javascript this pairs with:

document.getElementById("mkdirButton").onclick = function(){
    dirname = document.getElementById("mkdirInput").value;
    var httpc = new XMLHttpRequest();
    var url = "mkdir.php";        
    httpc.open("POST", url, true);
    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpc.send("dirname=" + dirname);//send data to saver.php
}

*/

$dirname = $_POST["dirname"]; //get data 
mkdir($dirname);
?>