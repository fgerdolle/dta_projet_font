<?php
require_once '../inc/autoload.php';

use Dao\SaladesDao as SaladesDao;

$config = include '../inc/constants.php';
$saladeDao = new SaladesDao($config);
$salades  = $saladeDao->findAllSalades();
$saladeDao->close();

   
require_once '../view/saladeView.php';