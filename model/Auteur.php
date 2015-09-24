<?php

class Auteur {
	public $_nom;
	public $_prenom;
	public $_description;
        public $_titre;
	
	public function __construct($nom, $prenom, $description, $livre)  
    {  
            $this->_nom = $nom;
	    $this->_prenom = $prenom;
	    $this->_description = $description;
            $this->_titre = $livre;
    } 
    
        public function getNom(){
            return $this->_nom;
        }

        public function getPrenom(){
            return $this->_prenom;
        }
        public function getDescription(){
            return $this->_description;
        }
        public function getLivre(){
            return $this->_titre;
        }
}

?>