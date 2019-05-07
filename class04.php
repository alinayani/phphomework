<?php

// while loop fiboncci series example
$max = 0;
$i = 0;
$j = 1;
echo $i." , ";
echo $j." , ";
$result = 0;
while ($max < 10 ){
	$result = $i + $j;
	$i = $j;
	$j = $result;
	$max = $max + 1;
	echo $result." , ";
}
echo '<br><br>';


//foreach loop example with key and value
$test = array("abc", "def", "Efg");
foreach($test as $key => $singleTest){
	echo $key ." ".$singleTest . "<br>";
	
}
echo '<br><br>';



// nested loop example
for($i=1; $i<=5; $i++){
	
	for($j=1; $j<=$i; $j++){
		echo ' * ';
	}
	
	echo '<br>';
}
echo '<br><br>';




// While assignment done in class to show only even numbers out of a given range ($n) limit upto 10
$i = 0;
$n = 12;
$limit = 10;
while($i <= $n){
	$i++;
	if($i % 2 != 0){
		continue;
	}
	if($i > $limit){
		break;
	}
	echo $i." ";
}

?>