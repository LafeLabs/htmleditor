<!doctype html>
<html>
<body>
<ul>
<?php 
$dirlist = scandir(getcwd());
for($index =0;$index < count($dirlist);$index++){
    if($dirlist[$index][0] <> "." && is_dir($dirlist[$index])){
        echo "    <a href = \"";
        echo $dirlist[$index];
        echo "/\"><li>";
        echo $dirlist[$index];
        echo "</li></a>\n";
    }
}
?>
</ul>
<style>
body{
    color:#00ff00;
    background-color:black;
    font-family:courier;
    font-size:1.2em;
    PADDING:1EM 1EM 1EM 1EM;
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