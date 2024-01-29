<?php
echo "<h1>THIS IS SHIFT AND UNSHIFT METHOD</h1>";
$color = ["RED","GREEN","PINK","BLUE","GRAY","LIME"];
 ECHO "<HR>";
echo "THIS IS ORIGNAL VALUE";
echo "<pre>";
print_r($color);
echo "</pre>";

ECHO "<HR>";
echo "THIS IS SHIFTING VALUE";
array_shift($color);
array_shift($color);
echo "<pre>";
print_r($color);
echo "</pre>";
echo "<br>";
$color = ["RED","GREEN","PINK","BLUE","GRAY","LIME"];

ECHO "<HR>";

echo "THIS IS ORIGNAL VALUE";
echo "<pre>";
print_r($color);
echo "</pre>";

ECHO "<HR>";

echo "THIS IS UNSHIFTING VALUE";
array_unshift($color,"BROWN","COCA");




echo "<UL>";
echo "<pre>";
print_r  ($color);
echo "</pre>";
echo "</UL>";





























?>
