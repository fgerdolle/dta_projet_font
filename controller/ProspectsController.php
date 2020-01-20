<?php
require_once '../inc/autoload.php';

use Dao\ProspectDao as ProspectDao;

$config = include '../inc/constants.php';
$prospectDao = new ProspectDao($config);
$prospects  = $prospectDao->findAllProspects();
$prospectDao->close();

   
require_once '../view/page4listprospect.php';