<?php
include_once("model/Model.php");
include_once("view/ListeLivres.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    }
	public function invoke()
	{
		if (isset($_GET['action']))
		{
                    if($_GET['action']== 'livre'){
                        $livre = $this->model->getLivre($_GET['livre']);
			include 'view/InfoLivre.php';
                    }
                    if($_GET['action']== 'livres'){
                        $livres = $this->model->getListeLivres();
			include 'view/ListeLivres.php';
                    }		
		}
		else
		{
			$livres = $this->model->getListeLivres();
			include 'view/ListeLivres.php';
		}
	}
}

?>

<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Bibliothèque</a>
            </div>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
					<div class="container">
						  <div class="starter-template">
							<form role="form" method="post">
							  <div class="form-group">
								<input style="width:auto; margin-top:10px;" type="text" class="form-control" id="keyword" placeholder="Rechercher">
							  </div>
							</form>
						  </div>
					</div><!-- /.container -->
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Accueil</a>
                    </li>
                    <li>
                        <a href="nouveaute.php"><i class="fa fa-fw fa-bar-chart-o"></i> Nouveautés</a>
                    </li>
                    <li>
                        <a href="view/auteurs.php"><i class="fa fa-fw fa-table"></i> Auteurs</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Genres <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Roman policier</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12 col-xs-1">
                        <h1 class="page-header">
                            Bienvenue !
                        </h1>
                        <?php
                        echo $liste;
                        ?>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>   

</body>
</html>