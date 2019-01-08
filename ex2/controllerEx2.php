<?php
require 'modeleDataBase2.php';
require 'modeleShowType.php';
$showTypes = new showTypes();
$showTypesList = $showTypes->showTypes();
?>