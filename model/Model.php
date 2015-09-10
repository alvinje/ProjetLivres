<?php

include_once("model/Livre.php");

class Model {
	public function getListeLivres()
	{

		return array(
			"Don Quichotte" => new Livre("Don Quichotte", "Miguel de Cervantes", "Un classique Espagnol."),
			"L'Étranger" => new Livre("L'Étranger", "Albert Camus", "Roman français du XXème."),
			"Faust" => new Livre("Faust", "Goethe", ""),
                        "Le Chateau" => new Livre("Le Chateau", "Franz Kafka", "Roman du célèbre écrivain tchèque Kafka."),
                        "Essais" => new Livre("Essais", "Montaigne", "Mieux vaut tête bien faite que tête bien pleine"),
                        "1984" => new Livre("1984", "George Orwell", "Un roman anglais")
		);
	}
	public function getLivre($titre)
	{
		$listeLivres = $this->getListeLivres();
		return $listeLivres[$titre];
	}

}

?>