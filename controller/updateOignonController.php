<?php
require_once '../inc/autoload.php';
use Dao\OignonsDao as OignonsDao;
use Service\OignonService as OignonService;
use Domain\Oignon as Oignon;



$config = include '../inc/constants.php';

$oignonDao = new OignonsDao($config);

$oignonService = new OignonService();

$errors = [];

$oignon = null;
$id = "";
$photo = "";
$name = "";
$price = "";
$description = "";

if (!empty($_GET['id'])) {
     
    $id = $_GET['id'];
   
    $oignon = $oignonDao->findOignonById($id);
    
    $oignonDao->close();
    
    $photo = $oignon->photo;
    $name = $oignon->name;
    $price = $oignon->price;
    $description = $oignon ->description;
 
}
else if (!empty($_POST)) {
    
    $id = $_POST["id"];
    $photo = $_POST["photo"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    
    
    $oignon = new Oignon($id, $photo, $name, $price, $description);
    
    $errors = $oignonService->isValid($oignon);
    
    if (empty($errors)) {
        
        $oignonDao->updateOignon($oignon);
        
        $oignonDao->close();
        
        header("Location: OignonController.php");
    }
    
}

require_once '../view/updateOignonView.php';