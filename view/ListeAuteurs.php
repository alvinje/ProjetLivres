
<?php header('Content-type: text/html; charset=UTF-8');ini_set('display_errors', 1); ?>

    
<!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"style="text-align: center;">Liste des auteurs
                    
                </h1>
            </div>
        </div>
        
        <!-- /.row -->
        
 <?php  
foreach ($auteurs as $nom => $auteur){
echo '<div class="row">';
 
           echo '<div class="col-md-4 portfolio-item" >';
               echo'<div class = "">';
                   echo '<a href="auteur.php?action=auteur&amp;auteur='.$auteur->getNom().'">'.$auteur->getNom().'</a>';
                echo'</div>';
            echo'</div>';
        echo'</div>';  
    }
 
    ?>