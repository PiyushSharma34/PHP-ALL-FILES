<?php
echo "<CENTER><h1><U>THIS IS FUNCTION WITH PARAMETER PROGRAM</U></h1></CENTER>";

function ram($S,$B,$W){

echo "<H2>HII PIYUSH  $S  BHAR $W ADWAJ$B</H2>.<BR>";

}

   $a = "ram";


$a( "NSTI ALLAHABAD","JAI HO AAPKI ","NISHANK SHARMA");
$a( "suneeta","radha",",RJKYHGJRK");
$a( "ambika dfghhd","trapti","RKTJHYR");








function piyush($a, $b ,$c){
    echo $a  -$b + $c;
}

piyush(20, 45,10);
echo "<br>";
piyush(45, 45,100);
echo "<br>";
piyush(20, 10,10);
echo "<br><br>";

$a  =1;
$x = $a>5? "yes it is true" : "no it is false";
echo $x;
echo "<br><br>";

$a  =48;
if($a<33){
    echo "<H1>YOU ARE FAIL</H1>";
}
elseif($a>33 && $a<50){
    echo  "<H1>YOU GOT III DIVISION</H1>";
}
elseif ($a>50 && $a<65) {
    echo "<H1>YOU GOT II DIVISION</H1>";
    
}
elseif($a>=65 && $a<=85){
    echo "<H1>YOU GOT I DIVISION</H1>";
}
elseif($a>85 && $a<=98) {
    echo "<H1>YOU GOT  DISTINCTION</H1>";
}
else {
    echo "<H1>WRITE A VALID NUMBER</H1>";
}










?>