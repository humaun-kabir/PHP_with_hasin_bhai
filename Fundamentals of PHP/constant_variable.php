<?php

$task = 'Read';
echo $task;//print Read

echo "\n";

$task = 'write';
echo $task;//print Write

//way of defining constant

define(PI, 3.1416);

echo "value of pi =".PI;//one of the way printing constant;

echo constant('PI'); //correct way of declaration constant.

//another way of declaration constant

$constant = 'constant';

echo "Value of PI = {$constant('PI')}";

//value of constant isn't changed;
