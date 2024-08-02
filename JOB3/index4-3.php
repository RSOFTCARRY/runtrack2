<titre> runtrack2 Jour 2 Job 3</titre>

<?php

$boucle =0;


while ( $boucle !=101){

    if ( $boucle == 0 || $boucle == 1 || $boucle == 2 ||$boucle == 3 ||$boucle == 4 ||$boucle == 5 ||$boucle == 6 ||$boucle == 7 ||$boucle == 8 ||$boucle == 9 ||$boucle == 10 ||$boucle == 11 ||$boucle == 12 ||$boucle == 13 ||$boucle == 14 ||$boucle == 15 ||$boucle == 16 ||$boucle == 17 ||$boucle == 18 ||$boucle == 19 || $boucle == 20 )
    {
       echo "<i>" . $boucle . "</i>" . "<br/>";
        $boucle = $boucle+1;
    }


 else 
 
 if (( $boucle >= 25) && ( $boucle <= 41))

    {
        echo "<u>" . $boucle . "</u>" . "<br/>";
        $boucle = $boucle+1;
        // ne pas oublier de dire de passer au chiffre +1
    }

else

if ( $boucle ==42)
{

    echo "La Plateforme" . "<br/>";
    $boucle = $boucle+1;
}

else 
 
 if ( ($boucle >=43 ) && ($boucle <=50))

    {
        echo "<u>" . $boucle . "</u>" . "<br/>";
        $boucle = $boucle+1;
        // ne pas oublier de dire de passer au chiffre +1
    }

else 
    {
        echo $boucle . "<br/>";
    
        $boucle = $boucle+1;
    }
   


}


echo "fin";


?>
