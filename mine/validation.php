<?php

// Initialize variables to empty

$nameError ="";
$emailError ="";
$genderError ="";
$websiteError ="";
$complete = false;

// one line declaration
$text = $name = $email = $web = $gender = "";

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
	
	if (empty($_POST["email"])) {
		$emailError = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
	}
	
	if (empty($_POST["website"])) {
		$web = "";
	} else {
		$web = test_input($_POST["website"]);
	}
	
	if (empty($_POST["comment"])) {
		$text = "";
	} else {
		$text = test_input($_POST["comment"]);
	}
	
	if (empty($_POST["gender"])) {
		$genderError = "Gender is required";
	} else {
		$gender = test_input($_POST["gender"]);
	}
	
	if($nameError == "" && $emailError == "" && $genderError == "" && $websiteError == ""){
		$text = $name = $email = $web = $gender = "";
		$complete = true;
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

<div>E-mail:
<input class="input" name="email" type="text" value="<?php echo $email; ?>">
<span class="error">* <?php echo $emailError;?></span></div>

<div>Gender:
<input class="radio" name="gender" type="radio" value="female" <?php echo $gender == "female" ? 'checked' : ''; ?>>Female
<input class="radio" name="gender" type="radio" value="male" <?php echo $gender == "male" ? 'checked' : ''; ?>>Male
<span class="error">*<?php echo $genderError;?></span></div>

<div>Website:
<input class="input" name="website" type="text" value="<?php echo $web; ?>">
<span class="error"><?php echo $websiteError;?></span></div>

<div>Comment:
<textarea cols="40" name="comment" rows="5"><?php echo $text; ?></textarea></div>

<div><input class="submit" name="submit" type="submit" value="Submit"></div>

</form>
</div>
</body>
</html>