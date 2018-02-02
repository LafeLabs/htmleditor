<!DOCTYPE html>
<html>
<body>
<?php
//http://www.geometronics.org/shell/?cssurl=https://pastebin.com/raw/TwT2Efny&htmlurl=https://pastebin.com/raw/zxm86Pae
    $url1 = $_GET["htmlurl"];        //get url html url    
    $data = file_get_contents($url1);//get data in html url
    echo $data;                      //put html data here, in body element
    echo "<style>";                  //start the style elment 
    $url2 = $_GET["cssurl"];         //get url for style data
    $data = file_get_contents($url2);//get data in style url
    echo $data;                      //put CSS into style element
    echo "</style>";                 //close style element
?>
</body>
</html>

