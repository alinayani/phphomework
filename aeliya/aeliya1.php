<?php
       for($s=5;$s>=1;$s--){

                for($j=1; $j<=$s;$j++){
                
                echo "*";
         
                           }
            
                 echo "<br/>";

?>

<?php                       }

$totalmarks = 100;
$obtained = 78;
$percantage = ($obtained/$totalmarks)*100;


if($obtained >=50) {
    echo "you have passed the exam". "<br/>"." your percantage is " .$percantage."%";
} else {
    echo" sorry! you are fail! your percantage is ".$percantage."%";
}


?>
