<?php
function calcul ( $a , $operation, $b){
    $resultat = 0;

   if ($operation =="+"){
    $resultat = $a + $b;
    echo $resultat;
   }

   elseif ($operation =="-"){
    $resultat = $a - $b;
    echo $resultat;
   }

   elseif ($operation =="x"){
    $resultat = $a * $b;
    echo $resultat;
    }

   elseif ($operation =="/"){
    $resultat = $a / $b;
    echo $resultat;
    }


   
    
   return $resultat;}








?>