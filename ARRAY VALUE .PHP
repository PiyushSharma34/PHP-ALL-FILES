<?php

echo "<B><I>THIS IS ARRAY VALUE AND ARRAY UNIQUE</I></B>";



$piyush =[
"NAME"=> "PIYUSH",
"AGE" =>  19,
"CITY"  =>"KANPUR",
"COURSE"=> "HTML",
"NAME 2"=> "PIYUSH",
"id" =>"afdsg"
];

echo "<br><br>";

ECHO "<HR>";

echo "<B><I>THIS IS ORIGNAL VALUE</I></B>";

echo "<pre>";
print_r($piyush);
echo "</pre>";


echo "<br><br>";
echo "<br><br>";

ECHO "<hr>";

echo "<B><I>THIS IS ORIGNAL VALUE WITH DATA TYPE</I></B>";
echo "<pre>";
var_dump($piyush);

echo "</pre>";


$arr = array_values($piyush);
echo "<br><br>";

echo "<hr>";

echo "<B><I>THIS IS ARRAY  VALUE</I></B>";
echo "<pre>";
print_r($arr);

echo "</pre>";


echo "<hr>";

echo "<B><I>THIS IS  ARRAY UNIQUE  VALUE</I></B>";
$ar = array_unique($piyush);

echo "<pre>";
print_r($ar);

echo "</pre>";







?>