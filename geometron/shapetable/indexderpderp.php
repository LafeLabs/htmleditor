<?php
    $baseurl = "https://pastebin.com/raw/vRd5EGKw";//get url with JSON data holding location of all other urls 
    $data = file_get_contents($baseurl);
    $jsondata =json_decode($data);
    $actions03xxurl = $jsondata->actions03xx;
    $actions010xxurl = $jsondata->actions010xx;
    $bottomfunctionsurl = $jsondata->bottomfunctions;
    $fonturl = $jsondata->font;
    $keyboardurl = $jsondata->keyboard;
    $pageurl = $jsondata->page;
    $pageeventsurl = $jsondata->pageevents;
    $shapesurl = $jsondata->shapes;
    $styleurl = $jsondata->style;
    $symbols03xxurl = $jsondata->symbols03xx;
    $symbols010xxurl = $jsondata->symbols010xx;
    $topfunctionsurl = $jsondata->topfunctions;
?>   
<!DOCTYPE HTML>
<html>
<head>
<!-- 
PUBLIC DOMAIN, NO COPYRIGHTS, NO PATENTS.
-->
    <title>/shapetable/</title>    
<script id = "bytecodeScript">
/*
<?php
$url = "font/data.txt";//get url 
$data = file_get_contents($fonturl);
echo $data."\n";
$url = "shapes/data.txt";//get url 
$data = file_get_contents($shapesurl);
echo $data."\n";
$url = "symbols03xx/data.txt";//get url 
$data = file_get_contents($symbols03xxurl);
echo $data."\n";
$url = "symbols010xx/data.txt";//get url 
$data = file_get_contents($symbols010xxurl);
echo $data."\n";
$url = "keyboard/data.txt";//get url 
$data = file_get_contents($keyboardurl);
echo $data."\n";
?>

*/
</script>
<script>
<?php
    $url = "topfunctions/data.txt";//get url 
    $data = file_get_contents($topfunctionsurl);
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
    <?php
            $url = "actions03xx/data.txt";//get url 
            $data = file_get_contents($actions03xxurl);
            echo $data;
            $url = "actions010xx/data.txt";//get url 
            $data = file_get_contents($actions010xxurl);
            echo $data;
    ?>
}
doTheThing(06);//import embedded hypercube in this .html doc
doTheThing(07);//initialize Geometron global variables
</script>
</head>
<body> 
<?php
//    $url = "page/data.txt";//get url 
    $url = "https://pastebin.com/raw/NFKNJjp0";
    $data = file_get_contents($pageurl);
    echo $data;
?>   
<script>
init();

<?php
    $url = "bottomfunctions/data.txt";//get url 
    $data = file_get_contents($bottomfunctionsurl);
    echo $data;
?>   

<?php
    $url = "pageevents/data.txt";//get url 
    $data = file_get_contents($pageeventsurl);
    echo $data;
?>   

</script>

<?php
    echo "<style>\n";
    $url = "style/data.txt";//get url 
    $data = file_get_contents($styleurl);
    echo $data;
    echo "</style>\n";
?>

</body>
</html>