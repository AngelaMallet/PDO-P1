<?php
require 'modelDatabase.php';
require 'modelClient.php';
$clients = new clients();
$clientsList = $clients->showClient();
?>
