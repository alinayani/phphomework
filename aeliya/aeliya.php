<?php
		//assignment two
		
		$foo = "100foo";
		$bar = "200bar";
		
		settype ($foo,"integer");
		
		settype ($bar,"integer");
		
		echo $foo + $bar; //result came 300.
		
		//assignment one
		echo "<br/><br/>";
		$var_one =100;
		$var_two = 200;
		
		echo $var_one;  // value 100
		echo "<br/>";   
		echo $var_two;  //value 200
		
		$var_one = $var_one + $var_two;
		$var_two =$var_one - $var_two;   //value swaped
		$var_one =$var_one - $var_two;
		
		echo "<br/><br/><br/>";
		echo $var_one;   //value 200
		echo "<br/>";
		echo $var_two;   //value 100
		

?>