<h1>TASK 1</h1>
<!--MARKSHEET -->

<?php
	$name = "Maryam";
	echo "Name: $name" . "<br>";
	$roll_no = 2018151;
	echo "Roll no: $roll_no" . "<br>";
	
	$sub1 = 76;
	$sub2 = 45;
	$sub3 = 85;
	
	$percentage = $sub1 + $sub2 + $sub3 / 3 * 100;
	
	if($sub1 > 60){
		echo "You've passed in English!" . "<br>";
	}else{
		echo "You've failed in English!" . "<br>";
	}
	
	if($sub2 > 50){
		echo "You've passed Maths!" . "<br>";
	}else{
		echo "You've failed Maths!" . "<br>";
	}
	
	if($sub3 > 60){
		echo "You've passed in History!" . "<br>";
	}else{
		echo "You've failed in History!" . "<br>";
	}
	
	
?>

<hr>
<h1>TASK 2</h1>

<?php
	for($i=5; $i<=5; $i--){
		for($j=1; $j<=$i; $j++){
			echo "* ";
		}
		echo "<br>";
	}
?>