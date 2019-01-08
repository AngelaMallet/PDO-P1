<?php
require 'models/modelDatabase.php';
require 'models/modelClient.php';
$showsTypesObj = new clients(); // new ShowTypes() est le nom de l'objet crée dans le modelshowTypes
$showsTypesArray = $showsTypesObj->getAllTypesShows(); //$showsTypesArray est le nom de la variable 
