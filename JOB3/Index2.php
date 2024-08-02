<title>JOB3 EX2 Tableaux Variable</title>

<?php
echo "Choisir un nombre entre 1 et 3" . "<br/>";


$choix = $_GET["choix"] ?? 0;
//["choix"] est le choix que l'on doit mettre dans la barre de recherche

if ($choix ==1)
// le double égal= est nécéssaire
{echo "Dracaufeu" . "<br/>";}
else

if ($choix ==2)
{ echo "Tiplouf" . "<br/>";}
else

if ($choix ==3)
{ echo "Bulbizarre" . "<br/>";}

echo "Fin";




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB3 EX2 Tableaux Variable</title>
</head>
<body>
    
</body>
</html>