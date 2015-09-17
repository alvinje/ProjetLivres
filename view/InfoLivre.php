<?php header('Content-type: text/html; charset=UTF-8'); ?>
<html>
<head></head>

<body>

    <?php 

            echo 'Image:' . $livre->getImage() . '<br/>';
            echo 'Titre:' . $livre->getTitre() . '<br/>';
            echo 'Auteur:' . $livre->getAuteur() . '<br/>';
            echo 'Description:' . $livre->getDescription() . '<br/>';

    ?>
    <a href="index.php?action=livres"><button>Retour</button></a>
</body>
</html>