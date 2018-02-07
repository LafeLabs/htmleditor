<!doctype html>
<html>
<body>
<table>
<tr>
    <td><button id = "mkdirButton">CREATE NEW DIRECTORY</button></td>
    <td>NAME OF NEW DIRECTORY:</td>
    <td><input id ="mkdirInput"/></td>
</tr>
<tr>
    <td><button id = "rmdirButton">DELETE DIRECTORY</button></td>
    <td>NAME OF DIRECTORY TO DELETE:</td>
    <td><input id ="rmdirInput"/></td>
</tr>
<tr>
    <td><button id = "renameButton">RENAME DIRECTORY</button></td>  
    <td>OLD NAME:</td>
    <td><input id ="renameInput1"/></td>
</tr>
<tr>
    <td></td>
    <td>NEW NAME:</td>
    <td><input id ="renameInput2"/></td>
</tr>

</table>
<ul id  = "mainlist">
<?php 
$dirlist = scandir(getcwd());
for($index =0;$index < count($dirlist);$index++){
    if($dirlist[$index][0] <> "." && is_dir($dirlist[$index])){
        echo "    <li><a href = \"";
        echo $dirlist[$index];
        echo "/\">";
        echo $dirlist[$index];
        echo "</a></li>\n";
    }
}
?>
</ul>
<script>

document.getElementById("mkdirButton").onclick = function(){
    dirname = document.getElementById("mkdirInput").value;
    var httpc = new XMLHttpRequest();
    var url = "mkdir.php";        
    httpc.open("POST", url, true);
    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpc.send("dirname=" + dirname);//send data to saver.php
}
document.getElementById("rmdirButton").onclick = function(){
    dirname = document.getElementById("rmdirInput").value;
    var httpc = new XMLHttpRequest();
    var url = "rmdir.php";        
    httpc.open("POST", url, true);
    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpc.send("dirname=" + dirname);//send data to saver.php
}
document.getElementById("renameButton").onclick = function(){
    oldname = document.getElementById("renameInput1").value;
    newname = document.getElementById("renameInput2").value;
    var httpc = new XMLHttpRequest();
    var url = "rename.php";        
    httpc.open("POST", url, true);
    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpc.send("oldname=" + oldname + "&newname=" + newname);//send data to saver.php
}
</script>
<style>
body{
    color:#00ff00;
    background-color:black;
    font-family:courier;
    font-size:1.2em;
    PADDING:1EM 1EM 1EM 1EM;
}
td,input,button{
    color:#00ff00;
    background-color:black;
    font-family:courier;
    font-size:1.2em;
}
a{
    color:#00ff00;                
}
#qrcodeimage{
    width:100px;
    background-color:white;
    padding:1em 1em 1em 1em;
    border-radius:1em;
}
</style>
</body>
</html>