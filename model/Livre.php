<?php

class Livre {
	public $_titre;
	public $_auteur;
	public $_description;
	
	public function __construct($titre, $auteur, $description)  
    {  
        $this->_titre = $titre;
	    $this->_auteur = $auteur;
	    $this->_description = $description;
    } 
    
        public function getTitre(){
            return $this->_titre;
        }

        public function getAuteur(){
            return $this->_auteur;
        }
        public function getDescription(){
            return $this->_description;
        }
}

?>