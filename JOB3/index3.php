<title>JOB3 EX2 Tableaux Variable</title>
<?php

echo "Choisir entre THEO & WALID" . "<br/>";


$theo = $_GET ["Théo"] ?? 0;
$walid = $_GET ["Walid"] ?? 0;
$painauchocolat = $_GET ["Pains au Chocolat"] ?? 0;
$croissants = $_GET [ "Croissant"] ?? 0;
$brioche = $_GET [ "Brioche" ] ?? 0;


if ($theo =="Théo")

{echo " 3 Pains au Chocolat" . " <br/>";}

else 

if ($walid == "Walid")
{echo " 7 Pains au Chocolat" . " <br/>";}

?>
