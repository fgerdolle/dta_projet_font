<?php
namespace Service;

use Domain\Tomate as Tomate;

class TomateService {

    public function __construct(){

    }
    public function isValid($tomate){

        $result = [];

        if ($tomate ->name == ''){
            $result['tomate.name'] = "Name is required";
        }
        if ($tomate ->price == ''){
            $result['tomate.price'] = "Price is required";
        }
        if ($tomate ->description == ''){
            $result['tomate.description'] = "Description is required";
        }
        return $result;
    }

}