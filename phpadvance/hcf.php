<?php 

function hcf($a, $b) 
{ 
    while ($a != $b) { 
        if ($a > $b)      
            $a = $a - $b;      
        else
            $b = $b - $a;      
    } 
    return $a; 
} 
  $a = 60; $b = 36; 
echo "HCF of a and b  is:",  hcf($a, $b) ;  
      
?> 