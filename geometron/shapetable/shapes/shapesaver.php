<?php
/* javascript this pairs with:

    buttons[3].onclick = function(){
        filename = inputs[4].value;
        var localString = "";
        for(var index = 0220;index < 0247;index++){
            if(currentTable[index].length > 1){
                localString += "0" + index.toString(8) + ":" + currentTable[index] + "\n";
            }
        }
        for(var index = 01220;index < 01247;index++){
            if(currentTable[index].length > 1){
                localString += "0" + index.toString(8) + ":" + currentTable[index] + "\n";
            }
        }
        document.getElementById("textIO0630").value = localString;
        data = localString;
        var httpc = new XMLHttpRequest();
        var url = "shapesaver.php";        
        httpc.open("POST", url, true);
        httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        httpc.send("data=" + data + "&filename=" + filename);//send text to saver.php
    }

*/
    $str = $_POST["data"]; //get data 
    $filename = $_POST["filename"].".txt";  //filename
    $file = fopen($filename,"w");// create new file with this name
    fwrite($file,$str); //write data to file
    fclose($file);  //close file
?>
