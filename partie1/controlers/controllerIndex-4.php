<?php
require 'models/modelDatabase.php';
require 'models/modelClient.php';
$clientsFidelityCardObj = new clients();
$clientsFidelityCardArray = $clientsFidelityCardObj->getClientsWithCardsOfFidelity();