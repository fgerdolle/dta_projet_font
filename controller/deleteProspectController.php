<?php
require_once '../inc/autoload.php';
use Dao\ProspectDao as ProspectDao;
use Service\ProspectService as ProspectService;
use Domain\Prospect as Prospect;

$config = include '../inc/constants.php';
$id = "";
if (!empty($_GET['id'])) {
    
    $id = $_GET['id'];
    
    $prospectDao = new ProspectDao($config);
    
    $prospect = $prospectDao->deleteProspect($id);
    
    $prospectDao->close();
}
require '../view/deleteProspectView.php';