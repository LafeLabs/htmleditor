<?php 
$dirlist = scandir("/Users/lafespietz/Desktop/htmleditor/");


for($index =0;$index < count($dirlist);$index++){
    if($dirlist[$index][0] <> "."){
        echo $dirlist[$index]."\n";
    }
}

?>