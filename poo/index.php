<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php
    include_once '01_classes/Personnes.php';
    $mister = new Personne();
    $mister->boire();
    ?>
</body>
</html>