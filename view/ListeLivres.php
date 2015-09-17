<?php header('Content-type: text/html; charset=UTF-8'); ?>
<html>
    <head>
    </head>
<body>
    
    <table class='col-md-5'>
            <tr><td>Titre</td><td>Auteur</td></tr>

                 <?php  foreach ($livres as $titre => $livre)
                    {
                            echo '<tr><td><a href="index.php?action=livre&amp;livre='.$livre->getTitre().'">'.$livre->getTitre().'</a></td><td>'.$livre->getAuteur().'</td><td>'.'<img src="Images/"'.$livre->getImage().'></img>'.'</td></tr>';
                    }
?>
            
    </table>
    
</body>
</html>
