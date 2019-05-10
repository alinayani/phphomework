<?php

/* Perform addition/subtraction of two string type variables:
	$foo = "100foo"; 	// string
	$bar = "200bar";   	// string	
	$c = ??			// result should be 300

*/

$foo = "100foo";
$bar = "200bar";

settype($foo, "integer");
settype($bar, "integer");

echo 'foo = '.$foo. '<br>';
echo 'bar = '.$bar. '<br>';
$c = $foo + $bar;
echo 'C = '.$c;

?>