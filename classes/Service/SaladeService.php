<?php
namespace Service;

use Domain\Salade as Salade;

class SaladeService {

    public function __construct(){

    }
    public function isValid($salade){

        $result = [];

        if ($salade ->name == ''){
            $result['salade.name'] = "Name is required";
        }
        if ($salade ->price == ''){
            $result['salade.price'] = "Price is required";
        }
        if ($salade ->description == ''){
            $result['salade.description'] = "Description is required";
        }
        return $result;
    }

}