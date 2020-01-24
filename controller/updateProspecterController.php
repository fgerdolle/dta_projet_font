<?php
require_once '../inc/autoload.php';
use Dao\ProspecterDao as ProspecterDao;
use Service\ProspecterService as ProspecterService;
use Domain\Prospecter as Prospecter;



$config = include '../inc/constants.php';

$prospecterDao = new ProspecterDao($config);

$prospecterService = new ProspecterService();

$errors = [];

$prospecter = null;
$id = "";
$idUser = "";
$name = "";
$mail = "";
$phone = "";
$job = "";
$experience = "";
$langue = "";
$salary = "";
$langue = "";
$availability = "";
$biographie = "";
$description = "";


if (!empty($_GET['id'])) {
     
    $id = $_GET['id'];
   
    $prospecter = $prospecterDao->findProspecterById($id);
    
    $prospecterDao->close();
    
    $idUser = $prospecter->idUser;
    $name = $prospecter->name;
    $mail = $prospecter->mail;
    $phone = $prospecter ->phone;
    $job = $prospecter ->job;
    $experience = $prospecter->experience;
    $salary = $prospecter->salary;
    $langue = $prospecter->langue;
    $availability = $prospecter ->availability;
    $biographie = $prospecter-> biographie;
    $description = $prospecter->description;

 
}
else if (!empty($_POST)) {
    
    $id = $_POST["id"];
    $idUser = $_POST["idUser"];
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $job = $_POST["job"];
    $experience = $_POST["experience"];
    $salary = $_POST["salary"];
    $langue = $_POST["langue"];
    $availability = $_POST["availability"];
    $biographie = $_POST["biographie"];
    $description = $_POST["description"];

    
    
    $prospecter = new Prospecter($id, $idUser, $name, $mail, $phone, $job, $experience, $salary , $langue, $availability, $biographie, $description);
    
    $errors = $prospecterService->isValid($prospecter);
    
    if (empty($errors)) {
        
        $prospecterDao->updateProspecter($prospecter);
        
        $prospecterDao->close();
        
        header("Location: ProspectersController.php");
    }
    
}

require_once '../view/updateProspecterView.php';