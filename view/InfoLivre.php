<?php header('Content-type: text/html; charset=UTF-8'); ?>
<html>

<body>

    <?php 
            echo '<div class="col-md-7 col-xs-12 portfolio-item" >';
            echo'<div class = "morph1 pic">';
            echo  '<img src="Images/'.$livre->getImage().'"></img><br />';
            echo'</div>';
            echo '<div class = "col-md-6 col-xs-12 centrer infoLivre"style = "position: fixed;"';
            echo '<h3>';
            echo 'Titre:' . $livre->getTitre() . '<br/>';
            echo '</h3>';
            echo 'Auteur:' . $livre->getAuteur() . '<br/>';
            echo 'Description:' . $livre->getDescription() . '<br/>';
            echo'</div>';
            echo'</div>';

    ?>
    <a href="index.php?action=livres"><button>Retour</button></a>
</body>
</html>