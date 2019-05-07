<html>
<head>
	<title> Assignment2 </title>
</head>
<body>
<?php
//Creating descending steric pattern using for loop
for($i=1; $i<=5;$i++){
	for($j=5; $j>=$i; $j--){
		echo "*";
	}
	echo "<br>";
}
?>

<p>Creating a marksheet using if else conditions</p>
<p>
	English= 65 </br>
	Maths= 70 </br>
	Science= 75 </br>
	History= 40 </br>
	Urdu= 60
</p>
<p>
	GRADE:
</p>
<?php
	$English= 65;
	$Maths= 70; 
	$Science= 75;
	$History= 40;
	$Urdu= 60;
	$Total=$English+$Maths+$Science+$History+$Urdu;
	$Grade=$Total/5;
	
if($Grade>=85){
	echo 'Congratulations! A1';
}
elseif ($Grade>=75){
	echo 'Merit! A';
}
elseif ($Grade>=60){
	echo 'Work harder! B';
}
elseif ($Grade>=50){
	echo 'Just on the edge! C';
}
else {
	echo 'FAIL';
}
?>
</body>
</html>