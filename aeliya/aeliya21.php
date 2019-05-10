
<html>   
    <head>
            <title>10 assignments </title>
    </head>
<body>
<h1>first assignment</h1>
 <?php
//first assignment

echo "Tomorrow i"."'"."ll  learn PHP global variables."."<br/>"."This is a bad command :del c:"."\ "."*"."."."*"; 
?>


<h1>second assignment</h1>
<?php
//second assignment

echo "<br/>";
echo phpversion();

?>


<h1>third assignment</h1>
<?php

//third assignment

echo "<br/>";

$list = array(1,1,2,2,3,4,4,5,6,7);
print_r (array_unique($list));
?>

<h1>fourth assignment</h1>
<?php

//fourth assignment

echo "<br/>";
$n = 4;
$factorial = 1;

for($f=$n;$f>=1;$f--){
        
    $factorial = $factorial * $f;
}

echo "factorial of"." ". $n." "."is"." ".$factorial;


?>

<h1>fifth assignment</h1>
<?php

//fifth assignment

$fruits = array('banana','apple','mango','orange','grapes','peach','cheeko','papaya');
$array_length = count($fruits)-3;
$slice= array_slice($fruits,1,$array_length);
echo "<br/><br/>";
print_r ($slice);
?>

<h1>sixth assignment</h1>
<?php
//sixth assignment

echo "<br/>";

        $countries = array
                           (
                            "Italy"=>"Rome", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
                        "Finland"=>"Helsinki", "France" => "Paris", "Germany" => "Berlin", "Greece" => "Athens",
                        "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
                        "Portugal"=>"Lisbon", "Spain"=>"Madrid","United Kingdom"=>"London"
                           ) ;
        $keys = array_keys($countries);
        $count = count($countries);
                            
        echo "<h3>"."for loop"."</h3>";
        for($i=0;$i< $count;$i++){
            
        echo "the capital of"." ". $keys[$i]." " ."is"." ". $countries[$keys[$i]]. "<br/>";

            }
            echo "<h3>"."foreach loop"."</h3>";
            //foreach loop
        echo "<br/>";

        foreach( $countries as $key => $value){
            
        echo "the capital of"." ". $key." " ."is"." ". $value. "<br/>";
        }

?>

<h1>seventh assignment</h1>
<?php
//seventh assignment
    echo "<br/>";
        $number = 7;

        for($i=1; $i<=7; $i++){
            for($n=1; $n<=7 ;$n++){
               $table=$i*$n;
                echo $table;

            }
            echo "<br/>";
        }

?>


<h1>eighth assignment</h1>
<?php
//eighth assignment
    echo "<br/>";
    function greater(){
    $a = 68;
    $b = 78;
    if($a >$b){
        $result = $a;
        echo "the highest value between $a and $b is:"." ".$result;
    }
    elseif($a==$b){
        echo "both values are equal";
    }
    else{
        $result=$b;
        echo "the highest value between $a and $b is:"." ".$result;
    }
}
echo greater();
    

?>


<h1>ninth assignment</h1>
<?php
//ninth assignment

echo "<br/>";
    $sub=array("europe"=>

                     array("italy"=>"rome","norway"=>"oslo")
                
              ,"africa"=>
            
                    array("nigeria"=>"abuja","egypt"=>"cairo")

              ,"asia"=>
                     array("japan"=>"tokyo","pakistan"=>"islamabad")

            );
            $elements=count($sub);
            $k = array_keys($sub);

            for($j=0;$j<$elements;$j++){
                foreach($sub[$k[$j]] as $key =>$value){
                    echo "continent:".$k[$j]."<br>"."country:".$key."<br>"."capital:".$value."<br>";
                }
            }


?>


<h1>tenth assignment</h1>
<?php
//tenth assignment

echo "<br/>";
function cal_power($value_one,$value_two =2){
    
$power = $value_one ** $value_two;

    return $power;
}
$p = 4;
$r = 3;

echo cal_power($p);

?>


</body>
</html>





