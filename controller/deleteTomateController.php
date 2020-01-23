<?php
require_once '../inc/autoload.php';
use Dao\TomatesDao as TomatesDao;
use Service\TomateService as TomateService;
use Domain\Tomate as Tomate;

$config = include '../inc/constants.php';
$id = "";
if (!empty($_GET['id'])) {
    
    $id = $_GET['id'];
    
    $tomateDao = new TomatesDao($config);
    
    $tomate = $tomateDao->deleteTomate($id);
    
    $tomateDao->close();
}
require '../view/deleteTomateView.php';