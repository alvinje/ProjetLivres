<?php header('Content-type: text/html; charset=UTF-8'); ?>
<html>
<head></head>

<body>

    <?php 
   
            echo '<div class="row">';
                echo '<div class="col-lg-12">';
                    echo '<h1 class="page-header centrer">' . $auteur->getPrenom() . ' ' . $auteur->getNom() . '</h1>';
                    echo '<h4 class="col-md-12">Description:</h4><p class="col-md-4">' . $auteur->getDescription() . '</p><br/>';
                    echo '<h4 class="col-md-12">Livres publiés :</h4>';
                    echo '<ul class="col-md-12">';

                    echo '<li class="col-md-12 centrer ">' . $auteur->getLivre() . '</li>';

                    echo '</ul>';
                 echo'</div>';
            echo'</div>';
    ?>
    </br>
    <a href="auteur.php" class="col-md-12"><button class="btn  btn-primary">Retour</button></a>
</body>
</html>