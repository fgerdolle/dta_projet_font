<?php
require_once '../inc/autoload.php';

use Dao\ProspecterDao as ProspecterDao;

$config = include '../inc/constants.php';
$prospecterDao = new ProspecterDao($config);
$prospecters  = $prospecterDao->findAllProspecters();
$prospecterDao->close();

   
require_once '../view/page6monprofil.php';