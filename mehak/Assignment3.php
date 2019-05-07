<html>
<head>
	<title>
		Assignment 3
	</title>
</head>
<body>

<?php
//1.
	echo "Tomorrow I 'll learn PHP global variables.";
	echo "</br>";
	echo "This is a bad command : del c:\*.*";
	
//2. Finding php version
	echo "</br></br>";
	echo phpversion();

//3.
$abc=array(1,1,2,2,3,4,5,5,6,7);
	echo "</br></br>";
	print_r(array_unique($abc));
	
//4. Factorial of any given n number

$n=6;
$x=1;
for($i=1;$i<=$n;$i++)
{
	$x *= $i;
}
	echo "</br></br>";
	echo "The factorial of $n is $x";
	
//5. 
$class=array('Mehak','Sana','Mariam','Alia','Salma','Maheen','Aliza','Batool','Hina','Anamta');
	echo "</br></br>";
	print_r (array_slice($class,1,7));
	echo "</br></br>";
	
	
//6.
$abc = array("Italy"=>"Rome", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid","United Kingdom"=>"London") ;
//foreach loop
$keys=array_keys($abc);
foreach ($abc as $keys => $value)
{
	echo "</br>";
	echo "The capital of $keys is $value.";
}

//for loop
//Will submit the remaining assignmnet over the weekend.


	
	

?>




</body>
</html>