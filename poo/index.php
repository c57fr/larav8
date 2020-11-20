<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php
    include_once 'cours/01_Instanciation.php';
        // Affichage du nom et du prénom de la personne 1
        echo 'Affichage du nom et du prénom de la personne 1<br/>';
        echo 'Personne1 <br/>';
        echo 'Nom: '.$personne1->nom.'<br/>';
        echo 'Prenom: ' .$personne1->prenom. '<br/>';

        echo '-----------------------------------------------------------------------------------------<br/>';
        
        // Accès à une constante
        echo 'Accès à une constante <br/>';
        echo 'Chaque personne a ' .Personne::NOMBRE_DE_YEUX. ' yeux<br/>';
        echo 'Chaque personne a ' .Personne::NOMBRE_DE_MAINS. ' mains<br/>';

        echo '-----------------------------------------------------------------------------------------<br/>';


        // Appel de méthode sur des objets
        echo 'Appel de méthode sur des objets<br/><br/>';
        echo $personne1->boire().'<br/>';
        echo $personne2->boire().'<br/>';
        echo $personne3->manger().'<br/>';
        echo $personne4->manger().'<br/>';
    ?>
</body>
</html>