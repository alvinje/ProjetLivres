<?php
include_once("model/Model.php");

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