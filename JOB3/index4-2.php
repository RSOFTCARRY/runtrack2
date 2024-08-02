<titre> runtrack2 Jour 2 Job 2 </title>




<?php

$boucle =0;
//  début de boucle
while ( $boucle !=1338){
    // fin de poucle

    if ( $boucle == 26 || $boucle == 37 || $boucle == 88 || $boucle == 1111 )
    // les cellules "OU" peuvent être mises à la suite
    {
    }
    else 
    {
        echo "<p> " . $boucle . "</p>"; 
        // mettre dans les <p></p> pour empêcher un defaut d'afficahage dans le navigateur
    }

    $boucle = $boucle+1;  

    
}




echo "fin";


?>
