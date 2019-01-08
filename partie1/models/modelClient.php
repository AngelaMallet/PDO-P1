<?php
// on crée une class clients dont le parent est database donc client hérite de tout les attributs
class clients extends database {
    
    public $id;       
    public $lastName;
    public $firstName;
    public $birthDate;
    public $card;
    public $cardNumber;   

    public function getAllClients() { //fontion qui va afficher les clients
        // On récupère tout le contenu de la table clients
        $queryResult = $this->database->query('SELECT * FROM clients'); 
        $allClientsData = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $allClientsData;
    }
    
    public function getTwentyFirstClients() { //fontion qui va afficher les clients
        // On récupère tout le contenu de la table clients
        $queryResult = $this->database->query('SELECT * FROM clients LIMIT 20'); 
        $twentyFirstClientsData = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $twentyFirstClientsData;
    }
}
