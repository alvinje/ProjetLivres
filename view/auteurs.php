<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        $sql = mysqli_query('SELECT auteurs FROM livres') OR die (mysqli_error());
         
        while( $donnees = mysqli_fetch_array($sql) )
        {
            $array = array (
                'id' => $donnees['titre'],
                'auteur' => $donnees['auteur']);
           return $array;
        }
   
        //echo "<div> <ul> <li> .$donnees['auteur']. </li> </ul> </div>"
        ?>
    </body>
</html>
