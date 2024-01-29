<?php
/*echo "THIS IS RECURSIVE FUNCTION ";
function ram($seeta){
    if($seeta<=50){
        echo $seeta."<br>";
        ram($seeta  + 1);
        
    }
}
ram(4);*/

echo "<h1> THIS IS FACTORIAL PROGRAM</h1>";
function factorial($n){
if($n == 0){
    return 1;
}
else {
    return ($n * factorial($n-1));
}



}

echo factorial(8);





?>