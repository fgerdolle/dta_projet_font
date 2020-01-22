<?php
require_once '../inc/autoload.php';

use Dao\OignonDao as OignonDao;

$config = include '../inc/constants.php';
$oignonDao = new OignonDao($config);
$oignons  = $oignonDao->findAllProspecters();
$oignonDao->close();

   
require_once '../view/oignonView.php';