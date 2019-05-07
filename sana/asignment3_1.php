<html>
<head>
<title>Marksheet</title>
</head>
<body>

<div>

<table border="1px">
	
	<caption>
	
	<h2> Marksheet </h2>
	
	</caption>
	
	<tr>
	
	<th>Subjects</th>
	
	<th>English</th>
	
	<th>Urdu</th>
	
	<th>Science</th>
	
	<th>Maths</th>
	
	<th>History</th>
	
	</tr>
	
	<tr>
	
	<th>Marks</th>
	
	<td>70</td>
	
	<td>65</td>
	
	<td>55</td>
	
	<td>90</td>
	
	<td>40</td>
	
	</tr>
	
	</table>
	
</div>

<?php
$english = 50;
$urdu = 45;
$science = 55;
$maths = 40;
$history = 20;

$totalMarks = $english + $urdu + $science + $maths + $history;
$percentage = $totalMarks / 5;

echo "Your Total Marks are:" . $totalMarks . "<br>";
echo "Your Percentage is " . $percentage . "%<br>";

if($percentage >= 90){
	echo " Congrats! You got A1 grade.";
}
elseif($percentage >= 80 and $percentage < 90){
	echo "Congrats! You got A grade.";
}
elseif($percentage >= 70 and $percentage < 80){
	echo "Your grade is B";
}
elseif($percentage >= 60 and $percentage < 70){
	echo "Your grade is C";
}
elseif($percentage >= 50 and $percentage < 60){
	echo "Your grade is D";
}
else{
	echo "Your grade is F";
}
?>
</body>
</html>