<?php
require_once '../inc/autoload.php';

use Dao\SaladesDao as SaladesDao;
use Service\SaladeService as SaladeService;
use Domain\Salade as Salade;

$config = include '../inc/constants.php';

$saladeService = new SaladeService();

$errors = [];

$photo = "";
$name = "";
$price = "";
$description = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $photo = $_POST["photo"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];

    $salade= new Salade(null,$photo, $name, $price, $description );

    $errors = $saladeService->isValid($salade);
    
    

    if (empty($errors)) {
        $saladeDao = new SaladesDao($config);
        $saladeDao->insertSalade($salade);
        $saladeDao->close();

        header('Location: SaladeController.php');
    }
    
    
}

   
require_once '../view/addSaladeView.php';