<?php 

function Fibo($n){ 
  
$num1 = 0; 
$num2 = 1; 
  
    $first = 0; 
    while ($first < $n){ 
        echo ' '.$num1; 
        $num3 = $num2 + $num1; 
        $num1 = $num2; 
        $num2 = $num3; 
        $first = $first + 1; 
    } 
} 
  

$n = 10; 
Fibo($n); 
?> 