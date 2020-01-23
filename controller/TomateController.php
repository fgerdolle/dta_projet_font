<?php
require_once '../inc/autoload.php';

use Dao\TomatesDao as TomatesDao;

$config = include '../inc/constants.php';
$tomateDao = new TomatesDao($config);
$tomates  = $tomateDao->findAllTomates();
$tomateDao->close();

   
require_once '../view/tomateView.php';