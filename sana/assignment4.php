<html>
<head>
<title>Assignment 4</title>
</head>
<body>

<h4>Task 1</h4>
<?php
// Echo same output
echo "Tomorrow I'll learn PHP global variables.<br>";
echo "This is a bad command : del c:\\*.*";
?>

<h4>Task 2</h4>
<?php
//Php version
echo phpversion();
?>

<h4>Task 3</h4>
<?php
//Remove Duplicates
$duplicate = array(1,1,2,2,3,4,5,5,6,7);
$noDuplicate = array_unique($duplicate);
print_r($noDuplicate);
?>

<h4>Task 4</h4>
<?php
//Factorial of 5
$n = 5;
$factorial = 1;

for ($x=$n; $x>=1; $x--)
{
    $factorial = $factorial * $x;
}

echo "The factorial of $n is $factorial";
?>

<h4>Task 5</h4>
<?php
//Slicing an array
$sana = array('abbas', 'sana', 'hani', 'ashter', 'dada', 'dadi');
$slice = array_slice($sana, 1, 3, true);
print_r($slice);
?>

<h4>Task 6</h4>
<?php
// Associative array in for and for each loop
$abc = array("Italy"=>"Rome", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid","United Kingdom"=>"London") ;

echo "The foreach loop<br><br>";
//Foreach loop
foreach($abc as $key => $value){
	echo "The capital of " . $key . " is " . $value. "<br>";
};
 echo "<br>The for loop<br><br>";
//for loop
$keys = array_keys($abc);
$count = count($abc);
for($i=0; $i < $count; ++$i){
	echo  "The capital of " . $keys[$i] . " is " . $abc[$keys[$i]]. "<br>";
}
?>

<h4>Task 7</h4>
<?php
// Return the highest value
function myFunction(&$a,$b){
	if($a < $b){
	      return $result = $b;
	}else{
		 return $result = $a;
	}
};
$a = 15;
$b = 12;
echo "The highest value of " . $a . " and " . $b . " is " . myFunction($a,$b);
?>

<h4>Task 8</h4>
<?php
//Nested loop multipliction table
$n = 5;
for($row=2; $row <= 10; $row++){
	for($col=1; $col <= $n; $col++){
		$result = $col * $row;
		echo $result . ' ';
		
	}
	echo '<br>';
}
?>

<h4>Task 9</h4>
<?php
//Multidimensional Array
$continents = array (array ("Continent" => "Asia", "Country" => "Pakistan" , "Capital" => "Islamabad" , "Country" => "India", "Capital" => "New Delhi" ),
		             array ("Continent" => "Europe","Country" => "Italy" , "Capital" => "Rome" , "Country" => "France", "Capital" => "Paris" ),
					 array("Continent" => "North America" , "Country" => "U.S.A." , "Capital" => "Washington", "Country" => "Canada", "Capital" => "Toronto" )
		);
$length = count($continents);

for($i=0; $i < $length; $i++){
	 echo '<br>';
		foreach ($continents[$i] as $key => $value){
		echo  $key . ':' . $value . '<br>';
	};
};
?>

<h4>Task 10</h4>
<?php
//Power function
function power($base,$exponent){
	$result = 1;
	
	for($i=1; $i <= $exponent; $i++){
		$result = $result * $base;
	}
	return $result;
}
echo power(3,3);
?>
</body>
</html>