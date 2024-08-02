<?php

$age = "50 ans";   
$prenom = "Laurent";
$taille = "1.73 m";
$ville = "AURIBEAU SUR SIAGNE";
$ville2 = "La Cadière d'Azur";
$chat = 0;
$chien = 0;
$elephant = 0;
$dromadaire = 0;
$tortue = 2;
$enfant = 2;
$animaux = $chat + $chien + $elephant + $dromadaire + $tortue;
$programmation = "La programmation";
$pascomprendre = "Comprend rien";
$team = "La Team";

$a1 = 8;
$a2 = 2;
$total = $a1 . $a2;

$texte1 = "Hello";
$texte2 = "J'habite à";
$texte3 = "j'ai";
$texte4 = "j'ai";
$texte5 = "je m'appel";
$texte6 = "J'aime";
$texte7 = "Mais j'y";
$point = ".";
$texte8 = "J'ai pas";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>VIVE LA PLATEFORME</h1>

    <h2> Hello <?= $team; ?> </h2> 

    <p> Je m'appel <?= $prenom;?> </p>
    <p> J'ai <?= $age;?> </p>
    <p> Je mesure <?= $taille;?> </p>
    <p> J'abite <?= $ville;?>
    <p> Mais je viens de <?= $ville2;?> </p>
    <p> J'aime la <?= $programmation;?> <?= $point;?> <?= $texte7;?> <?= $pascomprendre;?>
    <p> J'ai <?= $chat;?> chat, <?= $chien;?> chien mais j'ai <?= $tortue;?> Tortues <p>
<p> Par contre j'ai <?= $elephant;?> éléphant et <?= $dromadaire;?> dromadaire  mais <?= $texte4;?> <?= $enfant;?> Enfants </P>

<p> Du coup <?= $texte3;?> <?= $animaux; ?> animaux et <?= $enfant;?> enfants </p>

        
        
<p> La variable "Total" est égale à <?php echo $total; ?> </p>
<p> <?php echo $animaux; ?> </p>



</body>
</html>