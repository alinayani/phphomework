<?php
$nameError = $emailError = "";
$name = $email = "";
$saveData = false;


function on_submit($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if(isset($_POST['submit'])){
	
	if(empty($_POST["name"])){
		$nameError = "Name is required";
	} else {
		$name = on_submit($_POST["name"]);
		}
	if(empty($_POST["email"])){
		$emailError = "Email is required";
	}	else{
		$email = on_submit($_POST["email"]);
	}
	if($nameError == "" && $emailError == ""){
		$name = $email = "";
		$saveData = true;
	}
	}

?>

<!DOCTYPE html>
<html>
<head>
<title>Form Validation</title>
<style>
.error{
	color: red;
}
</style>
</head>
<body>
<div class= 'main'>
<?php if($saveData){
	echo "Thank You! We'll get back to you shortly";
} ?> 
<form action="#" method="post">

<div>NAME:*
<input type="text" name="name" value="<?php echo $name; ?>">
<span class="error"><?php echo $nameError; ?></span>
</div>

<div>EMAIL:*
<input type="email" name="email" value="<?php echo $email; ?>">
<span class="error"><?php echo $emailError; ?></span>
</div>

<div>
<input type="submit" class="submit" name="submit" value="Submit">
</div>

</form> 

</div>
</body>
</html>
