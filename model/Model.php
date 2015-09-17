<?php

include_once("model/Livre.php");
include_once("model/DbConnect.php");

class Model {
    
        private $_connexionDb;
        
        public function __construct() {
            $this->_connexionDb = new DbConnect();
        }
                
	public function getListeLivres()
	{
            $listeLivres = array();
            $livres = $this->_connexionDb->requete("SELECT * FROM livre");
           //var_dump($livres);
            foreach($livres as $livre){
                {
                    array_push($listeLivres, new Livre($livre->titre, $livre->auteur, $livre->description, $livre->image));
                }
                 
            }
            return $listeLivres;
	}
	public function getLivre($titre)
	{
		$listeLivres = $this->getListeLivres();
		return $listeLivres[$titre];
	}

}

?>