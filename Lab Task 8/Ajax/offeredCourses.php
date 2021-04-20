<?php

$a[] = "Computer Networks";
$a[] = "Blockchain";
$a[] = "Advanced Webtech";
$a[] = "Software Engineering";
$a[] = "Advanced Operating System";
$a[] = "Advanced Computer Networks";
$a[] = "Basic Graph Theory";
$a[] = "Algorithm";
$a[] = "Theory Of Computation";
$a[] = "Data Structure";
$a[] = "Introduction to Database";



$q = $_REQUEST["q"];

$hint = "";


if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
            
                $hint .= ", $name";
            
            }
        }
    }
}


echo $hint === "" ? "no suggestion" : $hint;
?>