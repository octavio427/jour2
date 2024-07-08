
<?php

$texte = " Etudiant ";
$texte1 = " Pain(s) au chocolat. ";
$texte2 = " Croissant(s). ";
$texte3 = " Brioche(s). ";
$texte4 = " à manger : ";
$message ="";

$nom1 = "Théo";
$pain_chocolat1 = 3 ;
$croissant1 = 0 ;
$brioche1 = 2;

$nom2 = "Wali";
$pain_chocolat2 = 4 ;
$croissant2 = 6 ;
$brioche2 = 0;

$etudiant = $_GET["etudiant"];

if( $etudiant == $nom1 ) {
    $message = "<br/>". $pain_chocolat1. $texte1. "<br/>". $croissant1. $texte2. "<br/>". $brioche1. $texte3;
}

elseif( $etudiant == $nom2) {
    $message = "<br/>". $pain_chocolat2. $texte1. "<br/>". $croissant2. $texte2. "<br/>". $brioche2. $texte3;
}


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index2</title>
</head>
<body>
    
<?= $texte. $etudiant. $texte4. $message ?>

</body>
</html>