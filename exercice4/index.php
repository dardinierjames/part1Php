<?php 
    $name = 'james';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4 PartI</title>
</head>
<body>
    <div>
        <?php
            echo 'Bonjour ' . $name . ', comment vas-tu ?';
        ?>
    </div>
    <div>Bonjour <?php echo $name; ?>, comment vas-tu ?</div>
</body>
</html>