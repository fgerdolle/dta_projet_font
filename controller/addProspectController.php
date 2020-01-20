<?php
require_once '../inc/autoload.php';

use Dao\ProspectDao as ProspectDao;
use Service\ProspectService as ProspectService;
use Domain\Prospect as Prospect;

$config = include '../inc/constants.php';

$prospectService = new ProspectService();

$errors = [];

$firstName = "";
$lastName = "";
$age = "";
$birth = "";
$gender = "";
$phone = "";
$mail = "";
$adress = "";
$purchase = "";
$remarque = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $age = $_POST["age"];
    $birth = $_POST["birth"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $adress = $_POST["adress"];
    $purchase = $_POST["purchase"];
    $remarque = $_POST["remarque"];

    $prospect= new Prospect(null,$firstName, $lastName, $age, $birth , $gender, $phone, $mail, $adress, $purchase, $remarque);

    $errors = $prospectService->isValid($prospect);
    
    

    if (empty($errors)) {
        $prospectDao = new ProspectDao($config);
        $prospectDao->insertProspect($prospect);
        $prospectDao->close();

        header('Location: ProspectsController.php');
    }
    
    
}

   
require_once '../view/addProspectView.php';