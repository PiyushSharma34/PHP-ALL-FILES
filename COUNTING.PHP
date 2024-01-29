<?php

echo "<center>";
echo "<H1>PIYUSH BHARADWAJ  </H1>";
echo "</center>";
echo "<br>";

echo "<center>";
echo "<H1>THIS IS REVERSE COUNTING  </H1>";
echo "</center>";

for($a = 100 ;$a>1;  $a--){
    if($a == 45){
        echo " HAPPY NEW YEAR";
        break;
    }


    echo $a."<br>";
}


echo "<center>";
echo "<H1>THIS IS  COUNTING  </H1>";
echo "</center>";



for($a = 1 ;$a<=100;$a++){
    echo $a."   ";
if($a >60){
    goto abc ;
}

}
echo $a."<br>";






abc :
echo "HELLO";
echo "PIYUSH";

echo "<BR>";
$x= 5;
for($a = 1;$a<=10;$a+=1){
    echo $a * $x."<br>";
}

echo "<BR>";

echo "<center>";
echo "<H1>THIS IS  even program  </H1>";
echo "</center>";


for( $a =1 ;$a<=100;$a+=1){

    if($a%2==0){
    
        echo $a."<br>";}
    }
    
echo "<br>";
echo "THIS IS REVERSE CHECK ODD NUMBER ";
echo "<br>";echo "<br>";
for($a = 100;$a>=1;$a--){
if($a%2!=0){
    echo $a."<BR>" ;}
}
echo "THIS IS REVERSE CHECK EVEN NUMBER ";
for($a = 100;$a>=1;$a--){

    if($a%2==0){
        echo $a."<br>";
    }
}






?>
