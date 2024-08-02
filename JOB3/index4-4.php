<titre> runtrack2 Jour 2 Job 4</titre>

<?php

$boucle =0;


while ( $boucle !=101)
// while veut dire tant que
{

    if ($boucle%3==0  &&  $boucle%5==0)

    {
   echo  "FizzBuzz" . "<br/>";
    $boucle = $boucle+1;

    }


    if ($boucle % 3 == 0)

        {
       echo  "Fizz" . "<br/>";
        $boucle = $boucle+1;
        }


        
        if ($boucle % 5 == 0)

        {


       echo  "Buzz" . "<br/>";
        $boucle = $boucle+1;
        }

        
   else
// ne pas oublier else
   {

    echo $boucle . "<br/>";
    $boucle = $boucle+1;



   }


}


echo "fin";


?>