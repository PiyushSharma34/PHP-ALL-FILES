<?php

echo "<h2>THIS IS ARRAY RAND AND SUFFLE POGRAM </h2>";

ECHO "<HR>";



$PIYUSH = ["RADHA","PIYUSH","SONA","MUKESH","JANAM",45,"TEACHER"];

echo "<i>THIS IS ORIGNAL VALUE OF ARRAY</i>";

echo "<pre>";
print_r($PIYUSH);
echo "</pre>";

ECHO "<HR>";

$C  =array_rand($PIYUSH);

ECHO "<I>THIS IS ARRAY RAND  WITHOUT  PARAMETER</I>";

echo "<pre>";
print_r($C);
echo "</pre>";

echo  $PIYUSH[$C];



echo "<hr>";

$P =array_rand($PIYUSH,2);

ECHO "<I>THIS IS ARRAY RAND </I>";

echo "<pre>";
print_r($P);
echo "</pre>";

echo $PIYUSH [$P[0]]."<br><br>";

echo $PIYUSH [$P[1]];

echo "<hr>";

$ram =[
"NAME" =>"RADHA",
"CITY"=> "KANPUR",
"AGE"=>24,
"COURSE" =>"HTML",
];

 shuffle($ram);

echo "THIS IS SUFFLE PROGRAM";
echo "<pre>";
print_r($ram);
echo "</pre>";















?>