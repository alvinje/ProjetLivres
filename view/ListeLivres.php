<?php header('Content-type: text/html; charset=UTF-8'); ?>
<html>
    <head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/MVC_BIBLI/css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>

<body>
    
<div class="container">
	<div class="row">
        <div class="span12">
            <form id="custom-search-form" class="form-search form-horizontal pull-right">
                <div class="input-append span12">
                    <input type="text" class="search-query mac-style" placeholder="Search">
                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
	</div>
</div>
    <table>
            <tr><td>Titre</td><td>Auteur</td></tr>
            <?php 

                    foreach ($livres as $titre => $livre)
                    {
                            echo '<tr><td><a href="index.php?action=livre&amp;livre='.$livre->getTitre().'">'.$livre->getTitre().'</a></td><td>'.$livre->getAuteur().'</td></tr>';
                    }

            ?>
    </table>
    

</body>
</html>