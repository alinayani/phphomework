<?php
// Initialize variables to null.
$nameError ="";
$emailError ="";
$genderError ="";
$websiteError ="";
$complete = false;
$text = $name = $email = $web = $gender = "";
// On submitting form below function will execute.
if(isset($_POST['submit'])){
	if (empty($_POST["name"])) {
		$nameError = "Name is required";
	} else {
		$name = test_input($_POST["name"]);
		// check name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nameError = "Only letters and white space allowed";
		}
	}
	if (empty($_POST["email"])) {
		$emailError = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
	// check if e-mail address syntax is valid or not
		//if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$email)) {
			//$emailError = "Invalid email format";
		//}
	}
	if (empty($_POST["website"])) {
		$web = "";
	} else {
		$web = test_input($_POST["website"]);
	// check address syntax is valid or not(this regular expression also allows dashes in the URL)
		//if (!preg_match('#((https?|ftp)://(\S*?\.\S*?))([\s)\[\]{},;"\':<]|\.\s|$)#i',$web)) {
			//$websiteError = "Invalid URL";
		//}
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
		/*unset($text);
		unset($name);
		unset($email);
		unset($web);
		unset($gender);*/
		$text = $name = $email = $web = $gender = "";
		$complete = true;
	}
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
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
<div><?php if($complete){ echo "Thank You for Submission.";}?></div>
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