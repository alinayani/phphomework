<?php
/* Using while loop create a program showing only even numbers 
and upto 10 only from a n number of series

*/

$max = 0;
$i = 2;
$j = 4;
echo $i."  ";
echo $j."  ";
$result = 1;
while ($max < 3 ){
	$result = $i + $j;
	$j = $result;
	$max = $max + 1;
	echo $result."  ";
}


?>