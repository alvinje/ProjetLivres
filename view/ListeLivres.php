<?php header('Content-type: text/html; charset=UTF-8'); ?>
<html>
    <head>
    </head>
<body>
    
    <div class='col-md-5'style="float: left;">
            <tr><td>Titre</td><td>Auteur</td></tr>
            

                 <?php  foreach ($livres as $titre => $livre)
                    {                
                            echo '<a href="index.php?action=livre&amp;livre='.$livre->getTitre().'">'.$livre->getTitre().'</a>'.$livre->getAuteur().'<img src="Images/'.$livre->getImage().'"></img>';
                           
                    }
                        
?>
            
            </div>
    
</body>
</html>
