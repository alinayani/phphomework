<?php

echo "Tomorrow I 'll learn PHP global variables."."\n"; 
echo '<br>';

echo "This is a bad command : del c:\\*.*"."\n"; 
echo '<br>';
echo "<br>";
echo 'Current PHP version: ' . phpversion();
echo '<br>';

$index=array(1,1,2,2,3,4,5,5,6,7);
echo "<br>";
$unique= array_unique($index);
print_r($unique);
echo '<br>';
echo "<br>";
$n = 4;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "The factorial of  $n = $x"."\n";
echo '<br>';

//creative an associative array
echo "<br>";
$abc = array("Italy"=>"Rome", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid","United Kingdom"=>"London") ;

//looping through an array using foreach 
echo "<br>";
echo" looping using foreach:";
echo '<br>';
foreach($abc as $val => $val_value){
	 echo "The capital of ".$val." is ".$val_value."\n";
}
echo '<br>';
/*looping through an array using for
echo"looping using for:";
$keys = array_keys($name_two);
$around = count ($name_two);

for($i=0; $i<$round; ++$i){
	 echo $keys{$i}.' ' . $name_two{$keys{$i}};*/
	 echo '<br>';

//create an index array
echo "<br>";
$fruits = array("apple" ,"mango", "banana", "grapes","guava","orange", "test");
$count = count($fruits);
//echo $count;
foreach($fruits as $index => $value ){
	if($index !=0 && $index != $count-1 && $index != $count-2)
	{
		 echo $index." = ".$value."<br>";
	}
	
}

echo "<br>";
//multidimensional array
$list = array(
	array(
		"continent" => "asia",
		"country" => "pakistan",
		"capital" =>"islamabad",
	),
	array(
		"continent" => "africa",
		"country" => "south africa",
		"capital" =>"cape town",
	),
	array(
		"continent" => "europe",
		"country" => "iceland",
		"capital" =>"Reykjavík",
	)
);


foreach($list as $index => $value ){
	
	//print_r($value );
	foreach($value as $index => $inner_value  ){
		echo  $index. ":" .$inner_value."<br>";
		
	}
	
}
?>