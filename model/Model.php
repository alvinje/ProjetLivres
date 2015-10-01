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
                
               foreach($listeLivres as $livre){
                   if($titre == $livre->getTitre()){
                       return $livre;
                   }
                   
               }
		
	}
        
        public function rechercher ($titre)
        {
            $listeLivres =$this->getListeLivres();
            foreach($listeLivres as $livre)
            {
                if(strtolower($titre) == strtolower($livre->getTitre()) || strtolower($titre) == strtolower($livre->getAuteur()))
                {
                return $livre;
            
            }
            }
        }
            
        public function insert($titre,$auteur,$description,$image)
        {
         $livres = $this->_connexionDb->requete("INSERT INTO livre
					(titre,
					auteur,
					description,
					image)
					VALUES
					('$titre',
					'$auteur',
					'$description',
					'$image')");
        return $livres;
        }
        
        public function delete($titre)
        {
        $livres = $this->_connexionDb->requete("DELETE from livre WHERE titre='$titre'");
        return $livres;
        }

}

?>