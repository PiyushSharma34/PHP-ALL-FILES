<?php

$PIYUSH = [
[
    "NAME" =>"PIYUSH",
    "AGE" =>23,
    "CITY"=> "KANPUR",
    "COURSE"=> "CSS",
],
[
    "NAME" =>"RADHA",
    "AGE" =>21,
    "CITY"=> "PANKI",
    "COURSE"=> "JAVA",
],
[
    "NAME" =>"TRAPTI",
    "AGE" =>22,
    "CITY"=> "ITAVA",
    "COURSE"=> "HTML",
],
[
    "NAME" =>"RAHUL",
    "AGE" =>32,
    "CITY"=> "RURA",
    "COURSE"=> "JQUERY",
]
];

echo "<h3>THIS IS ARRAY COLUMN AND CHUNK PROGRAM</h3>";


ECHO "<HR>";
echo "<i>THIS IS ORIGNAL ARRAY</i>";
echo "<pre>";
print_r($PIYUSH);

echo "<pre>";


ECHO "<HR>";

$RAM = array_column($PIYUSH,"COURSE");
$RA = array_column($PIYUSH,"NAME");


echo "<i>THIS IS ARRAY COLUMN PROGRAM</i>";

echo "<pre>";
print_r($RAM);

ECHO "<HR>";

print_r($RA);
echo "</pre>";


ECHO "<HR>";
echo "<i>THIS IS ARRAY CHUNK PROGRAM</i>";

$RURA = ["RED","GREEN","YELLOW","PINK","BROWN","PURPLE","LIME","BLACK","BLUE"];


$A = array_chunk($RURA ,2);


echo "<pre>";
print_r($A);
echo "</pre>";

ECHO "<HR>";


























?>