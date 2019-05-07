<?php
//Swap the values of two variables without using a temporary (third) variable.
$x = 10; $y = 5; 
  
// Code to swap 'x' and 'y' 
$x = $x + $y; // x now becomes 15 
$y = $x - $y; // y becomes 10 
$x = $x - $y; // x becomes 5 
  
echo "After Swapping: x = ",  
       $x, ", ", "y = ", $y;

?>