<?php 
//your code goes here
//$myName="Peter Mbuthia";
//$finaloutput="My name is called".'  ' .$myName;
//echo $finaloutput;
//echo $finaloutput

//arrays
// $students= array(" Peter", " Lucy", "Edwin", "Brian");
//echo $students[3];
$programmarks= array("assignment"=>25,
"CAT"=>30,"attendance"=>9, "projects"=>50);
echo "CAT:" .$programmarks["CAT"];
//Multidimensional Arrays
$WebTechnologies= array(
    "frontend"=> array("HTML", "Css", "Bootstrap"),
    "backend"=> array("PHP", "Js", "Python"),
    "database"=> array("Mysql", "Mongo", "Firebase")
);
echo $WebTechnologies["frontend"][2];
echo $WebTechnologies["backend"][2];
echo $WebTechnologies["database"][0];
?>
