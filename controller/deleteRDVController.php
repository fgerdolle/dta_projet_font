<?php
require_once '../inc/autoload.php';
use Dao\RDVDao as RDVDao;
use Service\RDVService as RDVService;
use Domain\RDV as RDV;

$config = include '../inc/constants.php';
$id = "";
if (!empty($_GET['id'])) {
    
    $id = $_GET['id'];
    
    $rdvDao = new RDVDao($config);
    
    $rdv = $rdvDao->deleteRDV($id);
    
    $rdvDao->close();
}
require '../view/deleteRDVView.php';