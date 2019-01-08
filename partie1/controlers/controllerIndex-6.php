        <?php
require 'models/modelDatabase.php';
require 'models/modelClient.php';
$planningArrayObj = new clients();
$planningArray = $planningArrayObj->getAllTypesShows();