<?php
require_once '../inc/autoload.php';

use Dao\TomatesDao as TomatesDao;
use Service\TomateService as TomateService;
use Domain\Tomate as Tomate;

$config = include '../inc/constants.php';

$tomateService = new TomateService();

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

    $tomate= new Tomate(null,$photo, $name, $price, $description );

    $errors = $tomateService->isValid($tomate);
    
    

    if (empty($errors)) {
        $tomateDao = new TomatesDao($config);
        $tomateDao->insertTomate($tomate);
        $tomateDao->close();

        header('Location: TomateController.php');
    }
    
    
}

   
require_once '../view/addTomateView.php';