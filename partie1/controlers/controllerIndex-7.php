        <?php
require 'models/modelDatabase.php';
require 'models/modelClient.php';
$infosArrayObj = new clients();
$infosArray = $infosArrayObj->getAllClientsInfo();