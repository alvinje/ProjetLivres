
<?php header('Content-type: text/html; charset=UTF-8'); ?>
<!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"style="text-align: center;">Liste des Livres
                    
                </h1>
            </div>
        </div>
        
        <!-- /.row -->
        
 <?php 
 $i = 0;

foreach ($livres as $titre => $livre){
    $i++;
 if ($i == 1) {  echo '<div class="row">'; }
 
           echo '<div class="col-md-4 col-xs-12 portfolio-item" >';
               echo '<a href="#">';
               echo'<div class = "morph pic">';
                   echo '<a href="index.php?action=livre&amp;livre='.$livre->getTitre().'">'.'<img src="Images/'.$livre->getImage().'" alt="">';
                echo '</a>';
                echo'</div>';
                   echo '</a>';
                echo '<h3 class="col-md-4.5 col-xs-12 centrer">';
                    echo '<a href="#">';                  
                    echo '<a href="index.php?action=livre&amp;livre='.$livre->getTitre().'">'.$livre->getTitre();                        
                    echo '</a>';
               echo '</h3>';
                echo'<h4 class="col-md-4.5 col-xs-12 centrer">'.$livre->getAuteur().'</h4>';
            echo'</div>';
    if ($i==3) { 
        echo'</div>';  
        $i = 0;
    }
    }
    
 
 
    ?>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
