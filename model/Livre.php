<?php

class Livre {
	public $_titre;
	public $_auteur;
	public $_description;
        public $_image;
	
	public function __construct($titre, $auteur, $description, $image)  
    {  
        $this->_titre = $titre;
	    $this->_auteur = $auteur;
	    $this->_description = $description;
            $this->_image = $image.".jpg";
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
        public function getImage(){
            return $this->_image;
        }
}

?>