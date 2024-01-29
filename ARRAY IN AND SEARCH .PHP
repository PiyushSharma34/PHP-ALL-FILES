<?php

echo "<h2>THIS IS IN ARRAY AND SEARCH PROGRAM</h2>";

$piyush = ["RADHA","SUNEETA","TRAPTI","MADHUREE",45,"HTML"];

echo "<hr>";

echo "<i>THIS IS IN ARRAY  PRIGRAM</i><br><br>";
echo in_array(45,$piyush);

echo "<hr>";

echo "<I>THIS IS ARRAY SEARCH PROGRAM</i><BR><BR>";

echo array_search("TRAPTI",$piyush);

echo "<hr><br>";

echo "<h2>THIS IS IN ARRAY  AND SEARCH PRIGRAM WITH ASSOSIATIVE ARRAY</h2>";

$stud = [
    "NAME"=> "RAJA",
    "CLASS" => 12,
    "CITY"=> "KANPUR",
    "COURSE"  => "HTML"
    ];
    echo "<hr>";

echo "<i>THIS IS IN ARRAY  PRIGRAM</i><br><br>";
echo in_array("KANPUR",$stud);

echo "<hr>";

echo "<I>THIS IS ARRAY SEARCH PROGRAM</i><BR><BR>";

echo array_search("HTML",$stud)."<BR><BR>";

echo "<hr>";

echo "<b>THIS IS ARRAY SEARCH WITH IS ELSE CONDITION</b>.<BR><br>";

if(in_array("FG",$stud)){

    echo "FIND SUCCESSFULLY";

}

else {
ECHO "CANT'T FIND SUCCESSFULLY";
}
echo "<hr><br>";

echo "<hr>";

$c = array_search("TRAPTI",$piyush);

echo "<pre>";
print_r($c);
echo "</pre>";





?>