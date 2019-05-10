<?php
	$error_username= "";
	$username="";
	$pswd="";
	$error_pswd="";
	
	function MyFunction($input){
		$input=trim($input);
		$input=stripslashes($input);
		$input=htmlspecialchars($input);
		return($input);
	}
	
	if(isset($_POST['submit'])){
		if(empty($POST['username'])){
			$error_username="* This field is required";
		}else{
			$username = MyFunction($_POST['username']);
		}
		
		if(empty($POST['pswd'])){
			$error_pswd="* This field is required";
		}else{
			$pswd = MyFunction($_POST['pswd']);
		}
	}
?>

<form  action="#" method="post">
	<input type="text" name="username" placeholder="Enter your username" id="username" value="<?php echo $username; ?>">
	<span id="error_username" style="color:red"><?php echo $error_username; ?></span>
	
	<br><br>
	
	<input type="password" name="pswd" placeholder="Enter your password" id="pswd" value="<?php echo $pswd; ?>">
	<span id="error_pswd" style="color:red"><?php echo $error_pswd; ?></span>
	
	<br>
	
	<input type="submit" name="submit" value="submit">
</form>
