<?php
$a=$b=$c=7;

//many variable can declare

$x=$y=$a;
echo $x,"\n",$y;//output 7

//pre increment

$n = 7;
$m = $n++;
echo $m,"\n", $n;//output 7 and 8

/*
$m = $n++;
$m = $n;
$n = $n + 1;
*/

//post increment

$n = 7;
$m = ++$n;
echo $m, "\n", $n;//output 8 and 8

/*
//$m = ++$n;
$n = $n + 1;
$m = $n;
*/