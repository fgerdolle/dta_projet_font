<?php
require_once '../inc/autoload.php';

use Dao\RDVDao as RDVDao;
use Service\RDVService as RDVService;
use Domain\RDV as RDV;

$config = include '../inc/constants.php';

$rdvService = new RDVService();

$errors = [];


$date = "";
$time = "";
$firstName = "";
$lastName = "";
$phone = "";
$mail = "";
$adress = "";
$remarque = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $date = $_POST["date"];
    $time = $_POST["time"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $adress = $_POST["adress"];
    $remarque = $_POST["remarque"];

    $rdv= new RDV(null, $date, $time, $firstName, $lastName, $phone, $mail, $adress, $remarque);

    $errors = $rdvService->isValid($rdv);
    
    

    if (empty($errors)) {
        $rdvDao = new RDVDao($config);
        $rdvDao->insertRDV($rdv);
        $rdvDao->close();

        header('Location: RDVSController.php');
    }
    
    
}

   
require_once '../view/addRDVView.php';