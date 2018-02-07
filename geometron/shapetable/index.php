<!--<page01>-->
<!DOCTYPE HTML>
<html>
<head>
<!-- 
PUBLIC DOMAIN, NO COPYRIGHTS, NO PATENTS.
-->
    <title>/shapetable/</title>    
<!--</page01>-->
<script id = "bytecodeScript">
/*
<?php
$url = "font/data.txt";//get url 
$data = file_get_contents($url);
echo $data."\n";
$url = "shapes/data.txt";//get url 
$data = file_get_contents($url);
echo $data."\n";
$url = "symbols03xx/data.txt";//get url 
$data = file_get_contents($url);
echo $data."\n";
$url = "symbols010xx/data.txt";//get url 
$data = file_get_contents($url);
echo $data."\n";
$url = "keyboard/data.txt";//get url 
$data = file_get_contents($url);
echo $data."\n";
?>

*/
</script>
<script>
<?php
    $url = "topfunctions/data.txt";//get url 
    $data = file_get_contents($url);
    echo $data;
?>   
        
function doTheThing(localCommand){    
    if(localCommand >= 040 && localCommand <= 0176){
            currentHTML += String.fromCharCode(localCommand);
            currentWord += String.fromCharCode(localCommand);
    }
    if(localCommand >= 0200 && localCommand <= 0277){//shapes 
        if(!(localCommand == 0207 && editMode == false) ){
            drawGlyph(currentTable[localCommand]);    	    
        }
    }
    if(localCommand >= 01000 && localCommand <= 01377){//symbol glyphs
            drawGlyph(currentTable[localCommand]);    	    
    } 
    // </page02>
    <?php
            $url = "actions03xx/data.txt";//get url 
            $data = file_get_contents($url);
            echo $data;
            $url = "actions010xx/data.txt";//get url 
            $data = file_get_contents($url);
            echo $data;
    ?>
}
doTheThing(06);//import embedded hypercube in this .html doc
doTheThing(07);//initialize Geometron global variables
</script>
</head>
<body> 
<?php
    $url = "page/data.txt";//get url 
    $data = file_get_contents($url);
    echo $data;
?>   
<script>
init();

<?php
    $url = "bottomfunctions/data.txt";//get url 
    $data = file_get_contents($url);
    echo $data;
?>   

<?php
    $url = "pageevents/data.txt";//get url 
    $data = file_get_contents($url);
    echo $data;
?>   

</script>

<?php
    echo "<style>\n";
    $url = "style/data.txt";//get url 
    $data = file_get_contents($url);
    echo $data;
    echo "</style>\n";
?>

</body>
</html>