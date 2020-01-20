<?php
require_once '../inc/autoload.php';
use Dao\ProspectDao as ProspectDao;
use Domain\Prospect as Prospect;

$config = include '../inc/constants.php';

if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
    
    
    $prospectDao = new ProspectDao($config);
    
    $prospect = $prospectDao->getProspect($id);
    require_once '../view/prospectView.php';
    $prospectDao->close();

    
}