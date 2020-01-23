<?php
require_once '../inc/autoload.php';

use Dao\OignonsDao as OignonsDao;

$config = include '../inc/constants.php';
$oignonDao = new OignonsDao($config);
$oignons  = $oignonDao->findAllOignons();
$oignonDao->close();

   
require_once '../view/oignonView.php';