<?php
require 'models/modelDatabase.php';
require 'models/modelClient.php';
$clientsObj = new clients();
$clientsArray = $clientsObj->getAllClients();
