<h2>TASK 1:</h2>
<?php
	echo "Tomorrow I 'll learn PHP global variables." . "<br>";
	echo "This is a bad command : del c:\*.*";
?>

<hr>

<h2>TASK 2:</h2>
<?php
	echo "The PHP version I'm using is " . phpversion();
?>

<hr>

<h2>TASK 3:</h2>
<?php
	$array=array(1,1,2,2,3,4,5,5,6,7);
	
	$result= array_unique($array);
	
	print_r($result);
?>

<hr>

<h2>TASK 4:</h2>
<?php
	$n=5;
	$x=1;
	for($i=$n; $i>=1;$i--){
		$x = $x * $i;
	}
	
	echo "factroail of $n is $x";
?>

<hr>

<h2>TASK 5:</h2>
<?php
	$array= array("red", "white", "green", "blue", "grey", "yellow", "orange", "black");
	
	$result= array_slice($array, 1, 5);
	
	print_r ($result);
?>

<hr>

<h2>TASK 6:</h2>
<?php
	echo "THROUGH FOREACH LOOP" . "<br>";
	$abc = array("Italy"=>"Rome", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid","United Kingdom"=>"London");
	
	foreach($abc as $key => $value){
		echo "The Capital of $key is $value" . "<br>";
	}
	
	echo "<br>";
	echo "THROUGH FOR LOOP" . "<br>";
	
	$keys = array_keys($abc);
	$count =  count($abc);
	
	for($i=0; $i < $count; $i++){
		echo "The Capital of " . $keys[$i] . " is " . $abc[$keys[$i]] . "<br>";
	}
?>

<hr>

<h2>TASK 7:</h2>
<?php
	$a = 20;
	$b = 50;
	$result = max($a, $b);
	
	echo "The highest of $a and $b is $result";
?>

<hr>

<h2>TASK 8:</h2>
<?php
	$n = 5;
	for($i=1; $i <= $n; $i++){
		for($j=1; $j <= $n; $j++){
			$result = $i * $j; 
			echo $result . " ";
		}
        echo "<br>";
	}
?>

<hr>

<h2>TASK 9:</h2>
<?php
	$array = array(
		"North America" => array(
			"United States" => "Washington D.C",
			"Canada" => "Ottawa"
		),
		"South America" => array(
			"Brazil" => "Brasilia",
			"Argentina" => "Buenos Aires"
		),
		"Europe" => array(
			"Germany" => "Berlin",
			"Spain" => "Madrid"
		)
	);
	
		echo "Continent : North America" . "<br>";
		echo "Country : United States" . "<br>";
		echo "Capital: " . $array["North America"]["United States"] . "<br>";
		echo "Country : Canada" . "<br>";
		echo "Capital: " . $array["North America"]["Canada"] . "<br>";
		echo "<br>";
		echo "Continent : South America" . "<br>";
		echo "Country : Brazil" . "<br>";
		echo "Capital: " . $array["South America"]["Brazil"] . "<br>";
		echo "Country : Argentina" . "<br>";
		echo "Capital: " . $array["South America"]["Argentina"] . "<br>";
		echo "<br>";
		echo "Continent : Europe" . "<br>";
		echo "Country : Germany" . "<br>";
		echo "Capital: " . $array["Europe"]["Germany"] . "<br>";
		echo "Country : Spain" . "<br>";
		echo "Capital: " . $array["Europe"]["Spain"] . "<br>";
?>

<hr>

<h2>TASK 10:</h2>
<?php
	$a = 4;
	$b = 5;
	$result = pow(4,5);
	
	echo "$a power $b is $result";
?>
