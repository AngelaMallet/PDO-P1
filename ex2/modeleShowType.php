<?php
// on crée une class clients dont le parent est database donc client hérite de tout les attributs
class showTypes extends database {
    public $id;       
    public $type;
     

    public function showTypes() { //fontion qui va afficher les types de shows
        // On récupère tout le contenu de la table showTypes
        $response = $this->database->query('SELECT * FROM showTypes'); 
        $data = $response->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
}
?>
