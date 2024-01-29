<?php

$ravi = [
[1,"piyush",45,"kanpur","html"],
[2,"radhika",20,"allahabad","css"],
[3,"puneet",23,"panki","java"],
[4,"raja",34,"kanpur","mysql"],
[5,"pandey",16,"gujrat","jquery"]
];

for($row = 0;$row<5;$row++){
for($clo = 0; $clo<5;$clo++){

    echo $ravi[$row][$clo]."  "   ;
}
echo "<br>";

}












?>