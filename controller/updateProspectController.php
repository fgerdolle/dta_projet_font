<?php
require_once '../inc/autoload.php';
use Dao\ProspectDao as ProspectDao;
use Service\ProspectService as ProspectService;
use Domain\Prospect as Prospect;



$config = include '../inc/constants.php';

$prospectDao = new ProspectDao($config);

$prospectService = new ProspectService();

$errors = [];

$prospect = null;
$id = "";
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

if (!empty($_GET['id'])) {
    
    $id = $_GET['id'];
    
    $prospect = $prospectDao->findProspectById($id);
    
    $prospectDao->close();
    
    $firstName = $prospect->firstName;
    $lastName = $prospect->lastName;
    $age = $prospect ->age;
    $birth = $prospect->birth;
    $gender = $prospect->gender;
    $phone = $prospect ->phone;
    $mail = $prospect->mail;
    $adress = $prospect->adress;
    $purchase = $prospect ->purchase;
    $remarque = $prospect->remarque;
 
}
else if (!empty($_POST)) {
    
    $id = $_POST["id"];
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
    
    
    $prospect = new Prospect($id, $firstName, $lastName, $age, $birth , $gender, $phone, $mail, $adress, $purchase, $remarque);
    
    $errors = $prospectService->isValid($prospect);
    
    if (empty($errors)) {
        
        $prospectDao->updateProspect($prospect);
        
        $prospectDao->close();
        
        header("Location: ProspectsController.php");
    }
}

require_once '../view/updateProspectView.php';