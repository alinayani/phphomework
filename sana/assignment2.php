<?php
// 1) Swapping two variables without using third variable by using Arithmetic Operators

$x = 10;
$y = 5;
$x = $x + $y;
$y = $x - $y;
$x = $x - $y; 

echo '1) x = 10 <br>
      y = 5 <br>';
echo "After swapping x =" . $x . " and y =" . $y;


// 2) Addition of two string type variables

$foo = "100foo";
$bar = "200bar";

settype($foo , "integer");
settype($bar , "integer");

$foobar = $foo + $bar;

echo "<br> 2) The result is " . $foobar;

/* 3) Difference between echo, var_dump and print

var_dump

The var_dump function displays structured information about variables/expressions including its type and value. Arrays are explored recursively with values indented to show structure. It also shows which array values and object properties are references.

echo and print

echo and print are more or less the same. They are both used to output data to the screen.

The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.*/

?>