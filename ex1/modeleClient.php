<?php
// on crée une class clients dont le parent est database donc client hérite de tout les attributs
class clients extends database {
    public $id;       
    public $lastname;
    public $firstname;
    public $birthdate;
    public $card;
    public $cardNumber;   

    public function showClient() { //fontion qui va afficher les clients
        // On récupère tout le contenu de la table clients
        $response = $this->database->query('SELECT * FROM clients'); 
        $data = $response->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
}
?>