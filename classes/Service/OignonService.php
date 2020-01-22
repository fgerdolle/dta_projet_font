<?php
namespace Service;

use Domain\Oignon as Oignon;

class OignonService {

    public function __construct(){

    }
    public function isValid($oignon){

        $result = [];

        if ($oignon ->name == ''){
            $result['oignon.name'] = "Name is required";
        }
        if ($oignon ->price == ''){
            $result['oignon.price'] = "Price is required";
        }
        if ($oignon ->description == ''){
            $result['oignon.description'] = "Description is required";
        }
        return $result;
    }

}