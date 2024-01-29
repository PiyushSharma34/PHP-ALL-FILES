<?php


echo "<h2>THIS IS ARRAY WALK AND ARRAY RECURSIVE PROGRAM </h2>";
$PIYUSH = ["RADHA","PIYUSH","VINAY","JAYASH","RADHIKA",23,"RAHUL"];





echo "<hr>";
echo "<i>THIS IS ARRAY WALK FUNCTION</i><BR><BR>";


$C = array_walk($PIYUSH,"ram");

echo "<pre>";
print_r($C);
echo "</pre>";




function ram($PIYUSH,){

echo "$PIYUSH  <BR><BR>";

}


$ram = [
"NAME" =>"PIYUSH",
"AGE" =>23,
"CITY" => "KANPUR",
"COURSE"=> "CSS",

];

echo "<hr>";
echo "<i>THIS IS ARRAY WALK FUNCTION WITH RECURSIVE </i><BR><BR>";
$A =array_walk_recursive($ram,"ee");




echo "<pre>";
print_r($A);
echo "</pre>";



function ee($A){

    echo" $A<BR>";
}


























?>