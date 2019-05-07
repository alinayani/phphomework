<?php 

//Difference b/w echo, print, and var_dump?

//echo
Echo "Echo = Outputs one or more strings separated by commas No return value<br>"; 
Echo "Example:<br>";
echo "Hi, Sawera<br> <br>";

//print()
Echo "print =  Outputs only a single string Returns 1, so it can be used in an expression <br>"; 
Echo "Example:<br>";
print "Hello<br> <br>";

//var_dump()
echo "var_dump = Outputs a human-readable representation of one or more values separated by commas Accepts not just strings but other types including arrays and objects, formatting them to be readable Uses a different output format to print_r(), for example it also prints the type of values Useful when debugging No return value <br>";
$data = ['dog','cat','mouse'];
var_dump($data);

?>