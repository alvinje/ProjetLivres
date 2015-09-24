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
                        echo 'Description: ' . $livre->getDescription() . '<br/><br/>';
                        echo'<a href="index.php?action=livres"><button class="btn btn-primary">Retour</button></a><br/><br/>';
                        echo'<a href="index.php?action=livres&amp;del='.$livre->getTitre().'"><button class="btn btn-danger">Supprimer livre</button></a><br/>';
                    echo'</div>';
                    echo'<div class="col-xs-7"></div>';
                echo'</div>';
                echo'</div>';
                
                if(isset($_GET['del']))
                {
                    $livres = $this->_connexionDb->requete('DELETE from livre WHERE titre="'.$_GET['del'].'"');
                    header('Location: index.php');
                }
           
    ?>
        
        </div>
</div>