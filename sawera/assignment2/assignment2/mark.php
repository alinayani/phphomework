<?php
/*Create a mark sheet which can calculate 5 subject total marks, percentage,
 and grade (fail if %age is less than 40, atleast 1 fail required).*/

//Marks
	$urdu=60;
	$islamiat=70;
	$english=80;
	$physics=90;
	$math=100;
	
	$total_marks=500;
	
	$obtain_total=$urdu+$islamiat+$english+$physics+$math;
	
	$percentage1=($obtain_total/$total_marks)*100;
	
	$percentage =40;
	echo "Percentage is ".$percentage;
	echo "<br>";
	
	if($percentage >= 90){
		echo "You are Toper";
	}
	elseif($percentage >80){
		echo "Your grade is A+";
	}
	elseif($percentage >70){
		echo "Your grade is A";
	}
	elseif($percentage >60){
		echo "Your grade is B";
	}
	elseif($percentage >=50){
		echo "Your grade is C";
	}
	elseif($percentage <=40){
		echo "You are failed";
	}
	

?>

