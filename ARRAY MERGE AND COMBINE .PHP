<?php
echo "<h1>THIS IS ARRAY MERGE AND COMBINE PROGRAM</h1><BR><BR>";
echo "<hr>";


echo "THIS IS ORIGNAL PROGRAM";
$course = ["CSS","JAVA","HTML","JQUERY"];
$course2 = ["MATH","ENGLISH","SCIENCE","HINDI"];
$STUD = ["MAHI","RAJENDRA","SURENDRA","HATIM"];
echo "<pre>";

print_r($course);
print_r($course2);
print_r($STUD);
echo "</pre>";


echo "<br>";

echo "<hr>";

echo "THIS IS ARRAY MERGE  PROGRAM<BR>";

$A = array_merge($course ,$course2,$STUD);


echo "<pre>";
print_r($A);
echo "</pre>";

echo "<hr>";
echo "THIS IS ORIGNAL COMBINE PROGRAM";
 
$course11 = ["CSS","JAVA","HTML","JQUERY"];
$course12 = ["MATH","ENGLISH","SCIENCE","HINDI"];
//$STUD1 = ["MAHI","RAJENDRA","SURENDRA","HATIM"];

echo "<pre>";

print_r($course11);
print_r($course12);
//print_r($STUD1);
echo "</pre><BR><BR>";
echo "<hr>";
echo "THIS IS   COMBINE PROGRAM";
echo "<pre>";
$new = array_combine($course11,$course12);
print_r($new);
echo "</pre>";










?>