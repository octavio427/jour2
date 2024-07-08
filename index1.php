<?php

$nom1 = "Dracaufeu";
$nom2 = "Triplouf";
$nom3 = "Bulbizarre";
$pokemon = "Pokemon: ";
$message ="";

$score = $_GET["score"];

if( $score == 1) {
    $message = "Dracaufeu ";
}

elseif( $score == 2) {
      $message = "Triplouf ";
}

elseif( $score == 3) {
      $message = "Bulbizarre ";
}

else {
    $message = "N'existe pas dans la liste";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport
     content="width=device-width, initial-scale=1.0">
    <title>index1</title>
</head>
<body>
    
<?= $pokemon. $message ?>

</body>
</html>