<?php

$name = 'Bangladesh';//this way of string declaration is correct.

$age = 16;//integer type of variable declaration.

$question = "How are you?";//another way of string declaration.

$word = "age";

echo $$word;//output is 16; cz $word means age and $age means 16;

echo 'Hello'.$name;//output Hello Bangladesh.

echo "\n";

echo 'Hello $name';//output Hello $name single quotation can't take variable;

echo "\n";
echo 'Hello'.$name."".$question;//writing this way of coding is correct bt nt proper way.

echo "Hello {$name}, {$question}";//writing this way of coding is perfect.





