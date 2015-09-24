<?php header('Content-type: text/html; charset=UTF-8'); ?>
<html>
<head></head>

<body>

    <?php 

            echo '<h3 class="centrer">' . $auteur->getPrenom() . ' ' . $auteur->getNom() . '</h3><br/>';
            echo '<h4>Description:</h4>' . $auteur->getDescription() . '<br/>';
            echo '<h4>Livres publiés :</h4>';
            echo '<ul>';

                echo '<li>' . $auteur->getLivre() . '</li>';

            echo '</ul>';
    ?>
    <a href="index.php"><button class="info">Retour</button></a>
</body>
</html>