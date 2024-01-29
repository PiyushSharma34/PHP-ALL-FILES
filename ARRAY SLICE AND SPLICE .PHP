<?php
echo "<I>THIS IS ARRAY SLICE  AND SPLICE  PROGRAM</I><BR><BR>";


$piyush = ["RADHA ","SUNEETA",45, "TRAPTI","HANUMAN","RADHIKA","SALEEM","MUKESH"]; 
ECHO "<HR>";
echo "THIS IS ORIGNAL VALUE";


echo "<pre>";
print_r($piyush);
echo "</pre>";

ECHO "<HR>";
echo "THIS IS ORIGNAL VALUE WITH DATA TYPE ";

echo "<pre>";
var_dump($piyush);

echo "</pre>";



  
ECHO "<HR>";
echo "<I><B>THIS IS ARRAY SLICE    PROGRAM</B></I>";

$b = array_slice($piyush, 2,5 ,TRUE );
echo "<pre>";
print_r($b);
echo "</pre> <BR><BR>";

echo "THIS IS ORIGNAL VALUE";

echo "<pre>";
print_r($piyush);
echo "<pre>";

echo "<hr>";

echo "<I><B>THIS IS SPLICE METHOD</B ></I>";

 $w = ["APPLE","GRAPES"];
$c = array_splice($piyush , 0,3,$w);

echo "<pre>";
print_r($c);
echo "</pre>";


















?>