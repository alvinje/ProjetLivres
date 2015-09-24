<?php
ini_set('display_errors', 1);
include_once("model/ModelAuteur.php");
include ("view/Header.php");

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
                    if($_GET['action']== 'auteur'){
                        $auteur = $this->model->getAuteur($_GET['auteur']);
			include 'view/InfoAuteur.php';
                    }
                    if($_GET['action']== 'auteurs'){
                        $auteurs = $this->model->getListeAuteur();
			include 'view/ListeAuteurs.php';
                        include ("view/Footer.php");
                    }		
		}
		else
		{
			$auteurs = $this->model->getListeAuteur();
			include 'view/ListeAuteurs.php';
                        include ("view/Footer.php");
		}
	}
}
?>