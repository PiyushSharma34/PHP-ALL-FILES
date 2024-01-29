<?php
echo "<H1>THIS IA ASSOSIATIVE ARRAY</H1>";
$PIYUSH = array( // WE CAN WRITE number and string value 
"ram" => "KANPUR",
"suneeta" => "ALLAHABAD",
"radha"=> "PATNA",
"lalal"=> "akabarpur"
// ram  => this is key and "kanpur" is a value of key


);
echo "<hr>";
echo $PIYUSH["suneeta"]."<br>";
echo "<hr>";
echo $PIYUSH["ram"]."<br>";
echo "<hr>";
echo $PIYUSH["radha"]."<br>";
echo "<hr>";


echo "<pre>";
print_r($PIYUSH);
echo "</pre>";

ECHO "<hr>";


echo "<I>THIS IS ASSOSIATIVE ARRAY WITH DATA TYPE </i>";

echo "<pre>";
var_dump($PIYUSH);
// we can also check data type of array
echo "</pre>";













?>