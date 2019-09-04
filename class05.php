<?php

// indexed array but giving indexes by ourself

asdas adasd $confusion = array(10 => 'ten', 11 => 'eleven', 12 => 'twelve');
echo "indexed array before adding a new element <br><br>";
var_dump($confusion);
echo "<br><br>";
// adding new element in above indexed array
$confusion[] = 'new element';

echo "adding a new element in an array without giving index by our self, php will give it index by default checking for the array last element index and adding +1 in it to get new index such as in above array before adding a new element the index was 12 and new element index is 13 see below and file also for code <br><br>";
var_dump($confusion);

echo "<br><br>";

$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

//keys of above associative array
echo "below are the keys of an associative array <br>";
$keys = array_keys($a1);
var_dump($keys);

// counting elements in an array
$count = count($a1);

echo "<br><br>";

// for loop for associative array
for($x=0; $x < $count; $x++){
 	echo "key is: ".$keys[$x]." , value is: ".$a1[$keys[$x]]."<br>";
}

/*
//multi dimensional array
$array = array(array (
          'name' => 'Ellie',
          'password'=> 'tr89ial'
     ),
	array(
         'name' => 'greatGuy',
         'password'=> 'abc123'
     ),
	array (
         'name' => 'blogger',
         'password' => '23seventeen23'
     )
 );

$arrayLength = count($array);

// looping for multi dimensional array
for ($i = 0; $i<$arrayLength; $i++) {
	echo $i . "<br>";	
	foreach ($array[$i] as $key => $value) {
		echo "key: " .$key .", value: ".$value."<br>";
    }
}
*/

// merge two arraysfunction
/*
echo "<br><br>";

$a1=array("red","green");
$a2=array("blue","yellow");
$merged = array_merge($a1,$a2);
print_r($merged);
*/

// get array keys function
/*
echo "<br><br>";

$keys = array_keys($merged);
var_dump($keys);
*/

// check key exists in array function
/*

echo "<br><br>";


$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a)){
  echo "Key exists!";
}else{
  echo "Key does not exist!";
}
*/


// get array values function
/*
echo "<br><br>";

$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));
*/

// get unique values from array function
/*
echo "<br><br>";

$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));
*/


// slice an array function
/*
echo "<br><br>";

$a=array("red","green","blue","yellow","brown","black");
print_r(array_slice($a,2,3));
*/


// get diff between arrays function
/*
echo "<br><br>";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);
*/


// search for a value in an array function
/*
echo "<br><br>";

$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
*/

// reverse an array function
/*
echo "<br><br>";

$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
*/

// prepend value in an array function
/*
echo "<br><br>";

$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");
print_r($a);
*/
?>
