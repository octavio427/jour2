
<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anthony</title>
</head>
<body>

    <div>
        <?php

        $i = 0;

        while ( $i != 50 ){
            echo "<h5>" . $i . "</h5/>"; 
            $i = $i + 1;
        }

        ?>
        
          <?= "Fin" ?>

    </div>

</body>
</html>