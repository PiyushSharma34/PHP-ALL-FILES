<?php

echo "<h1>THIS IS ARRAY KEY FUNCTION </h1>";

$PIYUSH = ["RADHA","SUNEETA",45,"RURA","TRAPTI","MOHAN"];

echo "<hr>";
echo "<I>THIS IS ORIGNAL ARRAY</I>";
echo "<pre>";
print_r($PIYUSH);
echo "</pre>";


$b = array_keys($PIYUSH);


echo "<hr>";
echo "<i>THIS IS ARRAY KEY FUNCTION <i>";
echo "<pre>";
print_r($b);
echo "<pre>";

echo "<hr>";

echo "<I>THIS IS ARRAY KEY FIRST</i>";

$C = array_key_first($PIYUSH);
echo "<br><br>";
print_r($C);


echo "<hr>";

echo "<I>THIS IS ARRAY KEY LAST</i>";

$C = array_key_last($PIYUSH);
echo "<br><br>";
print_r($C);

echo "<hr>";
echo "<I>THIS IS ARRAY KEY EXISTS</i>";

$C = array_key_exists( 0,$PIYUSH);
echo "<br><br>";
print_r($C);

echo "<hr>";
echo "<I>THIS IS  KEY EXISTS</i>";

$C = key_exists( 0,$PIYUSH);
echo "<br><br>";
print_r($C);
echo "<hr>";
echo "<h2><I>ASSOSIATIVE ARRAY WITH KEY FUNCTION</I></h2>";

$stud = [
"NAME"=> "RAJA",
"CLASS" => 12,
"CITY"=> "KANPUR",
"COURSE"  => "HTML"
];

echo "<i> THIS IS ORIGNAL ARRAY</i>";



ECHO "<PRE>";
print_r($stud);
ECHO "</PRE>";

echo "<i>THIS IS ARRAY KEY FUNCTION <i>";

echo "<pre>";
print_r($stud);
echo "<pre>";

ECHO "<hr>";

echo "<I>THIS IS ARRAY KEY FIRST</i>";

$C = array_key_first($stud);
echo "<br><br>";

echo "<pre>";
print_r($C);
echo "</pre>";


echo "<hr>";

echo "<I>THIS IS ARRAY KEY LAST</i>";

$c =array_key_last($stud);
echo "<pre>";
print_r($c);
echo "<pre>";

ECHO "<HR>";

echo "<I>THIS IS ARRAY KEY EXISTS</i>";

$C = array_key_exists( 4  ,$stud);
echo "<pre>";
print_r($c);
echo "</pre>";





?>