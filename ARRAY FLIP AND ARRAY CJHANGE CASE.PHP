<?php
echo "<h2><i>THIS IS ARRAY FLIP AND ARRAY CHANGE CASE PROGRAM</I></h2>";

$PIYUSH = ["RADHA ","SUNEETA ","TRAPTI",45,"PIYUSH"];

$C =array_flip($PIYUSH);
echo "<hr>";
echo "<I>THIS IS ORIGNAL VALUE </i><BR>";
 

echo "<pre>";
print_r($PIYUSH);
echo "<pre>";

echo "<hr>";

echo "<I>THIS IS ARRAY FLIP</i>";

echo "<pre>";
print_r($C);
echo "<pre>";

echo "<hr>";
echo "<h2><I> ARRAY FLIP WITH ASSOSIATIVE ARRAY</I></h2>";

$stud = [
"NAME"=> "RAJA",
"CLASS" => 12,
"CITY"=> "KANPUR",
"COURSE"  => "HTML"
];


echo "<hr>";
echo "<I>THIS IS ORIGNAL VALUE </i><BR>";

echo "<pre>";
print_r($stud);

echo "</pre><br>";

$c = array_flip($stud);

echo "<hr>";
echo "<i>THIS IS ARRAY FLIP </i>";
echo "<pre>";
print_r($c);
echo "<pre><BR>";

echo "<hr>";
echo "<I>THIS IS ORIGNAL VALUE </i><BR>";

echo "<pre>";
print_r($stud);

echo "</pre><br>";

$c =array_change_key_case($stud ,CASE_LOWER);

echo "<hr>";
echo "<i>THIS IS ARRAY CHANGE CASE </i>";
echo "<pre>";
print_r($c);
echo "<pre><BR>";


?>