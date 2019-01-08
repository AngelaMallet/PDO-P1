<?php
// on crée une class clients dont le parent est database donc client hérite de tout les attributs
class clients extends database {
    
    public $id;       
    public $lastName;
    public $firstName;
    public $birthDate;
    public $card;
    public $cards;
    public $cardNumber;   
    public $type;
    public $discount;
    public $cardTypesId;
    public $title;
    public $performer;
    public $date;
    public $startTime;



    public function getAllClients() { //fontion qui va afficher les clients
        // On récupère tout le contenu de la table clients
        $queryResult = $this->database->query('SELECT * FROM clients'); 
        $allClientsData = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $allClientsData;
    }
    
    public function getTwentyFirstClients() { //fontion qui n'affiche que les 20 premiers clients
        // On récupère tout le contenu de la table clients
        $queryResult = $this->database->query('SELECT * FROM clients LIMIT 20'); 
        $twentyFirstClientsData = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $twentyFirstClientsData;
    }
    
    public function getClientsWithCardsOfFidelity() { //fonction qui n'affiche que les clients possédant une carte de fidélité
        // On récupère tout le contenu de la table clients et cardTypes
        $queryResult = $this->database->query('SELECT * FROM `clients` INNER JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber` INNER JOIN `cardTypes` ON `cardTypes`.`id` = `cards`.`cardTypesId` WHERE `cardTypes`.`id` = 1;'); 
        $AllClientsWithFidelityCardsData = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $AllClientsWithFidelityCardsData;
    }

    public function getClientsWithAM() { //Fonction qui afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M"
        // On récupère tout le contenu de la table clients
        $queryResult = $this->database->query('SELECT * FROM clients WHERE lastName LIKE "M%" ORDER BY lastName'); 
        $AllgetClientsWithAMData = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $AllgetClientsWithAMData;
    }
     public function getAllTypesShows() { //fontion qui va afficher les types de shows
        // On récupère tout le contenu de la table clients
        $queryResult = $this->database->query('SELECT * FROM shows ORDER BY title'); 
        $allShowTypesData = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return $allShowTypesData;
    }
    
     public function getAllClientsInfo() { //fontion qui va Afficher tous les clients comme ceci
         //Nom de famille :
         //Prénom :
         //Date de naissance :
         //Carte de fidélité :
         //Si oui, N° de carte:
        $queryResult = $this->database->query('SELECT lastName, firstName, birthDate, card, cardNumber, 
    CASE card
	WHEN 1 THEN "Oui"
	WHEN 0 THEN "Non"
        END AS "etat"
        FROM clients'); 
        $allClientsInfoData = $queryResult->fetchAll(PDO::FETCH_OBJ);
        return  $allClientsInfoData;
    }

}
