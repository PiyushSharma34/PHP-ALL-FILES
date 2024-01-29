<?php
echo "<h2> THIS IS ARRAY REPLACE AND REPLACE RECURSIVE </h2>";

echo "<hr>";

$piyush = ["RADHA","SUNEETA","TRAPTI","MADHUREE",45,"HTML"];

$ram = ["PIYUSH","RAJA","TRAPTI"];


echo "<i> THIS IS ORIGNAL ARRAY </i>";
echo "<pre>";
print_r($piyush);
print_r($ram);

echo "<hr>";

echo "<i> THIS IS ORIGNAL ARRAY WITH DATA TYPE  </i><br><br>";
var_dump($piyush,$ram);
echo "</pre>";





ECHO "<HR>";

    echo "<I>THIS IS REPLACE ARRAY </i>";

$c = array_replace($piyush,$ram);


echo "<pre>";
print_r($c);
echo "</pre>";

    echo "<i>THIS IS MULTIDAIMENTION ASSOSIATIVE ARRAY REPLACE</i>";

$PIYUSH = [

"NAME" =>"PIYUSH",
"AGE"  => 23,
"CITY"  => "RURA",
"COURSE" => "HTML"
];

$RR = [

"COLOR 1"  => "RED",
"COLOR 2" =>  "YELLOW",
 "COLOR 3" => "GREEN",
 "COLOR 4" => "PINK"
];


 echo "<hr>";
echo "<i> THIS IS ORIGNAL ARRAY </i><BR><BR>";


echo "<pre>";
echo print_r($PIYUSH);
echo print_r($RR)."<BR>";


$A = array_replace_recursive($PIYUSH,$RR);

echo "<hr>";

echo "THIS IS RECURSIVE ,ASOSIATIVE  REPLACE ARRAY ";
echo "<pre>";
print_r($A);

echo "</pre>";






?>