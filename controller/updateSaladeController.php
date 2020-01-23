<?php
require_once '../inc/autoload.php';
use Dao\SaladesDao as SaladesDao;
use Service\SaladeService as SaladeService;
use Domain\Salade as Salade;



$config = include '../inc/constants.php';

$saladeDao = new SaladesDao($config);

$saladeService = new SaladeService();

$errors = [];

$salade = null;
$id = "";
$photo = "";
$name = "";
$price = "";
$description = "";

if (!empty($_GET['id'])) {
     
    $id = $_GET['id'];
   
    $salade = $saladeDao->findSaladeById($id);
    
    $saladeDao->close();
    
    $photo = $salade->photo;
    $name = $salade->name;
    $price = $salade->price;
    $description = $salade ->description;
 
}
else if (!empty($_POST)) {
    
    $id = $_POST["id"];
    $photo = $_POST["photo"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    
    
    $salade = new Salade($id, $photo, $name, $price, $description);
    
    $errors = $saladeService->isValid($salade);
    
    if (empty($errors)) {
        
        $saladeDao->updateSalade($salade);
        
        $saladeDao->close();
        
        header("Location: SaladeController.php");
    }
    
}

require_once '../view/updateSaladeView.php';