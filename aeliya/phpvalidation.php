<?php
       
$user_Error="";
$username ="";
$complete=false;

function test_data($data){
    $data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if(isset($_POST['submit'])){
    if(empty($_POST["username"])){
        $user_Error= "*name is required";
    }
    else{
        $username= test_data($_POST["username"]);
    }
}
if($user_Error == ""){
    unset($username);
    $username="";
    $complete=true;
}


       ?>
<html>
    <head>
        <title>
            php form
        </title>
    </head>
    <body>
    <style>
       
       input{
           width:200px;
           height:50px;

       }
       button{
           width:100px;
           height:40px;
           background-color:maroon;
           color:white;
       }
       button:hover{
           background-color:gold;
           color:black;
       }
      

    </style>
    
<h2>
<?php if($complete){ 
	echo "Thank You for Submission.";
}?>
</h2>
            <form method="post" action="#">
                <h1>username</h1>
                <input type="text" name="username" placeholder="username" value="<?php echo $username; ?>"/>
                <span class="error" style="color:red;"> <?php echo $user_Error;?></span>
                <br/><br/>
                <input type="submit" name="submit"/>
            </form>






    </body>

</html>
