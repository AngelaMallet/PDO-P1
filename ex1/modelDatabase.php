<?php
class database {
public $database;
    public function __construct(){
       try {
           $this->database = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'pda', 'pda');
       } catch (Exception $error) {
        die('Erreur de connexion ' . $error->detMessage());   
       }
    }
    
    public function __destruct() {
        $this->database = NULL;
    }
}
?>