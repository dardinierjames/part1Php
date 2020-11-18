<?php 
    $object = 'tu as fait ton job pour demain ? ';
    $message = 'ouaip ce n\'était pas super difficile';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice1 PartI</title>
</head>
<body>
    <h1>Démo</h1>
        <div>bonjour !!!</div>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit quo error ad quos autem? Dolore laboriosam corrupti numquam maxime quibusdam natus exercitationem blanditiis sed non.</div>
        <p><?php
            //déclaration de la variable variableName
            $variableName = 'et je dis ';
            //affichage de la variable variableName
            echo $variableName;
            // mot de passe azerty 
            echo 'au revoir !!!'; ?>
        </p>
        <p><?php
            echo $variableName; 
            echo 'à demain !!!'; 
            ?>
        </p>
        <p>
            <?php
            echo $object;
            echo $message;
            ?>
        </p>
</body>
</html>