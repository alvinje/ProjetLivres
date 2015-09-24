<?php header('Content-type: text/html; charset=UTF-8'); ?>
<html>

<body>

    <?php 
            echo'<div class = "morph pic">';
            echo  '<img src="Images/'.$livre->getImage().'"></img><br />';
            echo'</div>';
            echo 'Titre:' . $livre->getTitre() . '<br/>';
            echo 'Auteur:' . $livre->getAuteur() . '<br/>';
            echo 'Description:' . $livre->getDescription() . '<br/>';

    ?>
    <a href="index.php?action=livres"><button>Retour</button></a>
</body>
</html>