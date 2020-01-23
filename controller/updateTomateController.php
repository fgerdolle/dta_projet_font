<?php
require_once '../inc/autoload.php';
use Dao\TomatesDao as TomatesDao;
use Service\TomateService as TomateService;
use Domain\Tomate as Tomate;



$config = include '../inc/constants.php';

$tomateDao = new TomatesDao($config);

$tomateService = new TomateService();

$errors = [];

$tomate = null;
$id = "";
$photo = "";
$name = "";
$price = "";
$description = "";

if (!empty($_GET['id'])) {
     
    $id = $_GET['id'];
   
    $tomate = $tomateDao->findTomateById($id);
    
    $tomateDao->close();
    
    $photo = $tomate->photo;
    $name = $tomate->name;
    $price = $tomate->price;
    $description = $tomate ->description;
 
}
else if (!empty($_POST)) {
    
    $id = $_POST["id"];
    $photo = $_POST["photo"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    
    
    $tomate = new Tomate($id, $photo, $name, $price, $description);
    
    $errors = $tomateService->isValid($tomate);
    
    if (empty($errors)) {
        
        $tomateDao->updateTomate($tomate);
        
        $tomateDao->close();
        
        header("Location: TomateController.php");
    }
    
}

require_once '../view/updateTomateView.php';