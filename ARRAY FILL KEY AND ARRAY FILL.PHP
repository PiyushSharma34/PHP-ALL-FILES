<?php
echo "<h2>THIS IS ARRAY FILL KEYS AND ARRAY FILL</h2>";






$PIYUSH = ["RADHA","SUNEETA","MOHAN","JANVI","SUDHAKAR",45,1.2];

ECHO "<HR>";

echo "<I>THIS IS ORIGNAL VALUE <I>";

echo "<pre>";
print_r($PIYUSH);
echo "</pre>";





$C = array_fill_keys($PIYUSH,"RAM");



ECHO "<HR>";

echo "<I>THIS IS ARRAY FILL KEYS <I>";
    echo "<pre>";
print_r($C);
echo "</pre>";


ECHO "<HR>";

$piyush =[
    "NAME"=> "PIYUSH",
    "AGE" =>  19,
    "CITY"  =>"KANPUR",
    "COURSE"=> "HTML",
    "NAME 2"=> "PIYUSH",
    "id" =>"afdsg"
    ];

    $R = array_fill(-4,10,"PIYUSH BHARADWAJ");


    echo "<I>THIS IS ARRAY FILL  <I>";
    echo "<pre>";
    print_r($R);
    echo "</pre>";


















?>