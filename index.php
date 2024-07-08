<?php

$prenom = "Luka ";
$texte = "du joueur ";
$textetotal =  $texte . $prenom ;

$score = $_GET["score"];

if( $score >= 10) {
    $message = "Victoire ";
}

else{
    $message = "Défaite ";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    

<?= $message. $textetotal ?>


</body>
</html>