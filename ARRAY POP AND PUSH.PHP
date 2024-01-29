<?php
echo "<h1><i>THIS IS ARRAY POP AND PUSH METHOD</h1></i>";




echo "<i>THIS IS ARRAY POP METHOD</i><BR><BR>";
$pop = ["APPLE","BANANA","PAPAYA","ORANGE","PAPAYA"];

echo "<hr>";

echo "THIS IS ORIGNAL VALUE";
echo "<hr>";

echo "<pre>";
print_r($pop);

echo "</pre>";
array_pop($pop);


echo "<hr>";

echo "THIS IS POP VALUE";
echo "<pre>";
print_r($pop);

echo "</pre>";

echo "<hr>";



echo "<pre>";
var_dump($pop);

echo "</pre>";

echo "<hr>";

echo "<i>THIS IS ARRAY PUSH METHOD</i><BR><BR>";

echo "<hr>";

$push = ["APPLE","BANANA","PAPAYA","ORANGE","PAPAYA"];


echo "THIS IS ORIGNAL  VALUE";


echo "<hr>";

echo "<pre>";

print_r($push);
echo "<HR>";

echo "</pre>";

array_push($push,"date",45,"LEMON");

echo "THIS IS PUSH METHOD ";

echo "<pre>";

print_r($push);
echo "</pre>";
echo "<br>";

echo "<HR>";

echo "THIS IS PUSH  STRING METHOD ";

echo "<pre>";

var_dump($push);
echo "</pre>";









?>