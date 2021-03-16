<?php
$age = 12;
var_dump($age); // output int(12) var_damp shows it's type and value;

//how to see two variable info

$name1 = "humaun";
$name2 = "kabir";

var_dump($name1,$name2);//output is string(6) "humaun" and string(5) "kabir"

//printf

$fname = "Issac";
$lname = "Newton";

printf("His %sname is %s %s","Full",$name,$lname);

//three way of printing variable

$planet1 = "Mercurry";
$planet2 = "jupiter";

echo "The smallest planet is".$planet1."and the biggest planet is".$planet2."\n";

echo "The smallest planet is {$planet1} and the biggest planet is {$planet2}\n";

echo ("the smallest planet is %s and the biggest planet is %s\n",$planet1,$planet2);

echo ("the smallest planet is %s and the biggest planet is %s\n",strtoupper($planet1),strrev($planet2);