<?php
require_once '../inc/autoload.php';

use Dao\RDVDao as RDVDao;

$config = include '../inc/constants.php';
$rdvDao = new RDVDao($config);
$addrdv = $rdvDao->findAllRDV();
$rdvDao->close();

   
require_once '../view/page3RDV.php';