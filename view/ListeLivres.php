
<?php header('Content-type: text/html; charset=UTF-8'); ?>
<!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <button class="btn btn-success btnadd">Ajouter un livre</button>
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
    
 
 //Ajout nouveau livre
	if (isset ($_POST['creer']))
		{
		$titre = htmlentities($_POST['titre'],ENT_QUOTES,"UTF-8");
		$auteur = htmlentities($_POST['auteur'],ENT_QUOTES,"UTF-8");
		$description = ($_POST['description']);
                $image = ($_POST['image']);
		
                $this->_connexionDb->insert($titre,$auteur,$description,$image);
                header("Location: index.php");
		}
    ?>
<!--MODAL NOUVEAU LIVRE-->			

    <div class="modal fade" id="modalNouveauLivre" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Ajout d'un nouveau livre</h4>
            </div>
                    <form class="form-horizontal" method="post">
                        <div class="modal-body">
                            <div class="control-group">
				<label class="control-label">Titre</label>
                                    <div class="controls">
					<input name="titre" type="text"  placeholder="Titre du livre" required>
                                    </div>
                            </div>
                            <div class="control-group">
				<label class="control-label">Auteur</label>
					<div class="controls">
					    <input name="auteur" type="text"  placeholder="Auteur du livre" required>
					</div>
                            </div>
                            <div class="control-group">
				<label class="control-label">Description</label>
                                    <div class="controls">
                                         <textarea name="description" rows = "3" cols = "40" placeholder="Description courte du livre"></textarea>
                                    </div>
                            </div>
                            <div class="control-group">
				<label class="control-label">Nom image</label>
                                    <div class="controls">
                                          <p><input name="image" type="text"  placeholder="Nom de l'image" required>.jpg</p>
                                    </div>
                            </div>
			</div>
			<div class="modal-footer">
				<div class="form-actions">
					<button type="submit" class="btn btn-success" name="creer">Ajouter</button>
					<a class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Annuler</a>
				</div>
			</div>
		</form>
            </div>
        </div>
        </div>
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
</div>