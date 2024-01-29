<?php
echo "<h1>THIS IS ARRAY POP,PUSH,SHIFT AND UNSHIFT METHOD</h1>";
ECHO "<BR>";

$ram = ["RADHA","KUMARI",23,"KANPUR","HTML","AP14",45];

echo "<hr>";

echo "<i>THIS IS ORIGNAL VALUE</i>";
echo "<pre>";
print_r($ram);
echo "</pre>";
echo "<br><br>";




echo  array_pop($ram)."<BR>";

echo "<hr>";

echo "<i>THIS IS POP  ARRAY</i>";
echo "<pre>";
print_r($ram);
echo "</pre>";

echo "<br><br>";

echo "<hr>";
 echo "<i>THIS IS ORIGNAL VALUE </i>";

echo "<pre>";

print_r($ram);
echo "</pre>";

echo  array_push($ram ,"RADHIKA ");

echo "<hr>";

echo "<i>THIS IS PUSH   ARRAY</i>";
echo "<pre>";
print_r($ram);
echo "</pre><BR><BR>";

echo "<hr>";

echo "<i>THIS IS ORIGNAL VALUE </i>";

echo "<pre>";
print_r($ram);
echo "</pre>";

echo array_shift($ram)."<BR>";

echo "<hr><BR><BR>";




echo "<u>THIS IS SHIFT  METHOD</u>";
echo "<pre>";
print_r($ram);
echo "</pre><BR><BR>";

echo "<hr><BR>";

echo "<u>THIS IS ORIGNAL  VALUE</u>";
echo "<pre>";
print_r($ram);
echo "</pre><BR><BR>";



ECHO "<HR>";
echo "<i>THIS IS UNSHIFT METHOD </i>";

echo array_unshift($ram , "PIYUSH",123,"TRAPTI");


echo  "<pre>";
print_r($ram);
echo  "</pre>";













?>