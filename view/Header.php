<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projet MvcBibli</title>

    <!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Script Modal -->
    <script type="text/javascript">
    $(document).ready(function(){
            $(".btnadd").click(function(){
                    $("#modalNouveauLivre").modal('show');
            });
    });
    
    $(document).ready(function () {
    var theHREF;

    $(".confirmModalLink").click(function(e) {
        e.preventDefault();
        theHREF = $(this).attr("href");
        $("#confirmModal").modal("show");
    });

    $("#confirmModalYes").click(function(e) {
        window.location.href = theHREF;
    });
});
    </script>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Accueil</a>
                </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="auteur.php">Auteurs</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    </ul>
                        <form class="navbar-form navbar-right inline-form">
                            <div class="form-group" style="float: right;">

                        <input type="search" class="input-sm form-control" style="display: inline-block;width: 100px;" placeholder="Recherche">

              <button type="submit" class="btn btn-primary btn-sm"style=" display: inline-block;width: 100px;"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>

                        </div>
                        </form>
                        
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.container -->