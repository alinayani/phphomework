<?php
	echo 'Hello world!';
 ?>
 
 <?php

$a=10;
$b=20;

echo "Value of a: $a</br>";
echo "Value of b: $b</br>";

$a=$a+$b;
$b=$a-$b;
$a=$a-$b;

echo "Value of a: $a</br>";
echo "Value of b: $b</br>";

?>

<p>
Difference between echo and print:</br>
They are both used to output data to the screen. The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions.
</br>
The print_r() displays information about a variable in a way that's readable by humans. array values will be presented in a format that shows keys and elements. Similar notation is used for objects.
</br>
The var_dump function displays structured information about variables/expressions including its type and value. Arrays are explored recursively with values indented to show structure. It also shows which array values and object properties are references.

</p>

<?php
$foo="100foo";
$bar="200bar";

settype($foo, "integer");
settype($bar, "integer");

echo $c=$foo+$bar;

?>