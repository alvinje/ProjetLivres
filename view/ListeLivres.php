<?php header('Content-type: text/html; charset=UTF-8'); ?>
<html>
    <head>
    </head>
<body>
    <?php
    $liste = "<table class='col-md-5'>
            <tr><td>Titre</td><td>Auteur</td></tr>";

                   foreach ($livres as $titre => $livre)
                    {
                            echo '<tr><td><a href="index.php?action=livre&amp;livre='.$livre->getTitre().'">'.$livre->getTitre().'</a></td><td>'.$livre->getAuteur().'</td><td>'.$livre->getImage().'</td></tr>';
                    }

            
    "</table>";
    ?>
</body>
</html>
