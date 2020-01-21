<?php
require_once '../inc/autoload.php';
use Dao\RDVDao as RDVDao;
use Service\RDVService as RDVService;
use Domain\RDV as RDV;



$config = include '../inc/constants.php';

$rdvDao = new RDVDao($config);

$rdvService = new RDVService();

$errors = [];

$rdv = null;
$id = "";
$date = "";
$time = "";
$firstName = "";
$lastName = "";
$phone = "";
$mail = "";
$adress = "";
$remarque = "";

if (!empty($_GET['id'])) {
    
    $id = $_GET['id'];
    
    $rdv = $rdvDao->findRDVById($id);
    
    $rdvDao->close();
    
    $date = $rdv ->date;
    $time = $rdv->time;
    $firstName = $rdv->firstName;
    $lastName = $rdv->lastName;
    $phone = $rdv ->phone;
    $mail = $rdv->mail;
    $adress = $rdv->adress;
    $remarque = $rdv->remarque;
 
}
else if (!empty($_POST)) {
    
    $id = $_POST["id"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $adress = $_POST["adress"];
    $remarque = $_POST["remarque"];
    
    
    $rdv = new RDV($id,$date, $time, $firstName, $lastName, $phone, $mail, $adress, $remarque);
    
    $errors = $rdvService->isValid($rdv);
    
    if (empty($errors)) {
        
        $rdvDao->updateRDV($rdv);
        
        $rdvDao->close();
        
        header("Location: RDVSController.php");
    }
}

require_once '../view/updateRDVView.php';