<?php
require_once '../inc/autoload.php';
use Dao\SaladesDao as SaladesDao;
use Service\SaladeService as SaladeService;
use Domain\Salade as Salade;

$config = include '../inc/constants.php';
$id = "";
if (!empty($_GET['id'])) {
    
    $id = $_GET['id'];
    
    $saladeDao = new SaladesDao($config);
    
    $salade = $saladeDao->deleteSalade($id);
    
    $saladeDao->close();
}
require '../view/deleteSaladeView.php';