<?php

include_once("model/Auteur.php");
include_once("model/DbConnect.php");

class Model {
    
        private $_connexionDb;
        
        public function __construct() {
            $this->_connexionDb = new DbConnect();
        }
                
	public function getListeAuteur()
	{
            $listeAuteur = array();
            $auteurs = $this->_connexionDb->requete("SELECT auteur.nom, auteur.prenom, auteur.description, livre.titre FROM auteur, livre WHERE auteur.nom = livre.auteur AND auteur.id = livre.id;");

            foreach($auteurs as $auteur){
                {
                    array_push($listeAuteur, new Auteur($auteur->nom, $auteur->prenom, $auteur->description, $auteur->titre));
                }
                sort($listeAuteur);
            }
            return $listeAuteur;
	}
	public function getAuteur($nom)
	{
		$listeAuteur = $this->getListeAuteur();
                
               foreach($listeAuteur as $auteur){
                   if($nom == $auteur->getNom()){
                       return $auteur;
                   }
                   
               }
		
	}

}

?>