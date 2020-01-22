<?php
require_once '../inc/autoload.php';

use Dao\ProspecterDao as ProspecterDao;

$config = include '../inc/constants.php';
$prospecterDao = new ProspecterDao($config);
$prospecterDao->close();

   
require_once '../view/page5lecatalogue.php';