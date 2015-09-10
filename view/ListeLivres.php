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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
<body>
    <div class="col-md-12 hidden-xs page-header">
        <h1>Bibliothèque (image de fond)</h1>
    </div>
<div class="col-sm-12 col-md-3 menu">
    <nav role="navigation" class="navbar navbar-inverse">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="col-md-2">
                <form id="custom-search-form" class="form-search form-horizontal">
                    <div class="col-md-2">
                        <input type="text" class="search-query" placeholder="Rechercher">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active col-md-12"><a href="#">Acceuil</a></li>
                <li class="col-md-12"><a href="#">Nouveauté</a></li>
                <li class="dropdown col-md-12">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Catégories <b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Auteurs</a></li>
                        <li><a href="#">Genre</a></li>
                        <li><a href="#">Epoques</a></li>
                    </ul>
                </li>
                <li class="col-md-12"><a href="#">Login</a></li>
            </ul>
                
        </div>
    </nav>
</div>
    

    <table class="col-md-5">
            <tr><td>Titre</td><td>Auteur</td></tr>
            <?php 

                    foreach ($livres as $titre => $livre)
                    {
                            echo '<tr><td><a href="index.php?action=livre&amp;livre='.$livre->getTitre().'">'.$livre->getTitre().'</a></td><td>'.$livre->getAuteur().'</td></tr>';
                    }

            ?>
    </table>
    
    <div class="col-md-12 hidden-xs page-footer">
        <h1>Footer</h1>
    </div>
</body>
</html>