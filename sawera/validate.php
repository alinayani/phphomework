<?php

// Initialize variables to empty

$nameError ="";
$complete = false;

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

// On submitting form below function will execute.
if(isset($_POST['submit'])){
	
	if(empty($_POST["name"])){
		$nameError = "Name is required";
	} else {
		$name = test_input($_POST["name"]);
		// check name only contains letters and whitespace (regex)
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nameError = "Only letters and white space allowed";
		}
	}

}
//php code ends here
?>
<!DOCTYPE html>
<html>
<head>
<title>Form Validation with PHP - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href="style.css" rel="stylesheet">
</head>
<body>
<div class="maindiv">
<div class="form_div">
<div class="title">
<h2>Form Validation with PHP.</h2>
</div>

<h2>
<?php if($complete){ 
	echo "Thank You for Submission.";
}?>
</h2>

<form action="#" method="post">

<h2>Form</h2>
<span class="error">* required field.</span>

<div>Name:
<input class="input" name="name" type="text" value="<?php echo $name; ?>">
<span class="error">* <?php echo $nameError;?></span></div>


<div><input class="submit" name="submit" type="submit" value="Submit"></div>

</form>
</div>
</body>
</html>