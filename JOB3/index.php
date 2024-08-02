<title> JOB3 EX1 Tableaux Variable </title>


<?php

//http://localhost/job3/index.php?montant=0
// le ?? 0; sert à mettre une valeur par défaut pour ne pas que la page se mette un defaut.
$score = $_GET["score"] ?? 0;




if ($score >10)

{ 
    echo "Gagné". "<br/>";
}

else

{echo "Perdu" . "<br/>";

}


echo "Fin";






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB3 Tableaux Variable Exercice1 </title>
</head>
<body>
    
</body>
</html>