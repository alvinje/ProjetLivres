<?php

include_once("model/Livre.php");
include_once ("model/DbConnect.php");

class Model {
	public function getLivreList()
	{
            $listLivres = array();
            $livres = $this->_dbConnexion->requete("SELECT * FROM Livre");
           // var_dump($livres);
            foreach($livres as $livre){
                if($livre->idEmprunteur!=0){
                    array_push($listLivres, new Livre($livre->titre, $livre->isbn, $livre->auteur, $livre->description));
                }
                 
            }
            return $listLivres;
	}
	public function getLivre($titre)
	{
		$listeLivres = $this->getListeLivres();
		return $listeLivres[$titre];
	}

}

?>