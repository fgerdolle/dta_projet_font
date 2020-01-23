<?php
require_once '../inc/autoload.php';
use Dao\OignonsDao as OignonsDao;
use Service\OignonService as OignonService;
use Domain\Oignon as Oignon;

$config = include '../inc/constants.php';
$id = "";
if (!empty($_GET['id'])) {
    
    $id = $_GET['id'];
    
    $oignonDao = new OignonsDao($config);
    
    $oignon = $oignonDao->deleteOignon($id);
    
    $oignonDao->close();
}
require '../view/deleteOignonView.php';