<?php header('Content-type: text/html; charset=UTF-8'); ?>
    <div class="container">
        <div class="row">
            
    <?php 
                    echo'<div class="col-md-7 col-xs-12">';
                    echo'<div class = "morph1 pic">';
                         echo  '<img src="Images/'.$livre->getImage().'"></img><br />';
                    echo'</div>';
                    echo'</div>';
                    
                    echo '<div class = "col-md-5  col-xs-12 centrer">';
                        echo '<h3>';
                            echo '<h3>Titre: ' . $livre->getTitre() . '<br/>';
                        echo '</h3>';
                        echo 'Auteur: ' . $livre->getAuteur() . '<br/>';
                        echo 'Description: ' . $livre->getDescription() . '<br/>';
                        echo'<br/><a href="index.php?action=livres"><button class="btn btn-primary">Retour</button></a>';
                    echo'</div>';
                    echo'<div class="col-xs-7"></div>';
                echo'</div>';
                echo'</div>';
           
    ?>
        
        </div>
</div>