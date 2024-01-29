<?php
ECHO "<h1>THIS IS ARRAY RECURSIVE ARRAY</h1>";
echo "<hr>";
function ram($radha){

    if($radha>=1){

        echo "$radha<br><br>";


        ram($radha -1);  
    }
}
ram(10);
echo "<br>";
function raja($raa){

if($raa<=80){

echo $raa."<br>" ;

raja($raa+8);

}
}

raja(8);




























?>