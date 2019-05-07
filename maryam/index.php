<?php
	echo "TASK 1" . " : ";

	$a=5;
	$b=6;
	
	$a1 =  $a + $b;  // 5 + 6 = 11
	$_b = $a1 - $b;   // 11 - 6 = 5
	$_a = $a1 - $a;  // 11 - 5 = 6
	echo $_a . ' , ' . $_b;
	
	//list($a, $b) = array($b, $a);
	//echo $a . ' , ' . $b;	
?>

<br>
<br>

<?php
	echo "TASK 2" . " : ";

	$foo = "100foo";
	$bar = "200bar";
	
	settype ($foo , "integer");
	settype ($bar , "integer");
	
	$c = $foo + $bar;
	
	echo $c;
?>

<br>
<br>

DIFFERENCE BETWEEN ECHO, PRINT AND VAR_DUMP: <br>
- Echo and print are exactly the same thing. They're both used to output (whatever you like) to the screen. <br>
- Var_dump() is used to output information (i.e. value and data types) about a variable (i.e. is the variable a string, an array, an object, an integer, etc.). If the variable is an array, the data types will also be outputted for everything. <br>
- Print_r() is very similar to var_dump(), except the data types are excluded and the output is human-friendly.