<?php
$name = $email = "";
$name_error = $email_error = "";
$complete = false;

function submit_form($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if(isset($_POST['submit'])){
	if(empty($_POST['name'])){
		$name_error = 'Please enter you Name';
	}
	else {
		$name = submit_form($_POST['name']);
	}
}

if (isset($_POST['submit'])){
	if(empty($_POST['email'])){
		$email_error = 'Please enter your Email';
	}
	else{
		$email = submit_form($_POST['email']);
	}
	
}

?>
<html>
<head>
<title>Form validation php</title>
<style>
	.button {
		padding: 10px 20px;
		color: blue;
		background-color: gray;
		margin: 20px;
	}
	.name {
		padding:5px 20px;
		margin-top: 3px;
	}
	.error {
		color: red;
	}
</style>
</head>

<body>
<h2>FORM VALIDATION</h2>
<div>
<form action="#" method="post">
<div>
	Name:*
	<input type='text' class='name' name='name' value="<?php echo $name; ?>">
	<span class='error'><?php echo $name_error; ?></span>
</div>
<div>
	Email*
	<input type='email' class='name' name='email' value="<?php echo $email; ?>">
	<span class='error'><?php echo $email_error; ?></span>
</div>
<div>
	<input type='submit' class='button' name='submit' value='Submit'>
</div>
</form>
</div>
</body>

</html>