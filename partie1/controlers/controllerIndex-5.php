        <?php
require 'models/modelDatabase.php';
require 'models/modelClient.php';
$clientsNameMObj = new clients();
$clientsNameByMdArray = $clientsNameMObj->getClientsWithAM();