<?php
require_once '../inc/autoload.php';

use Dao\OignonsDao as OignonsDao;
use Service\OignonService as OignonService;
use Domain\Oignon as Oignon;

$config = include '../inc/constants.php';

$oignonService = new OignonService();

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

    $oignon= new Oignon(null,$photo, $name, $price, $description );

    $errors = $oignonService->isValid($oignon);
    
    

    if (empty($errors)) {
        $oignonDao = new OignonsDao($config);
        $oignonDao->insertOignon($oignon);
        $oignonDao->close();

        header('Location: OignonController.php');
    }
    
    
}

   
require_once '../view/addOignonView.php';