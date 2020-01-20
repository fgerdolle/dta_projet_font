<?php
namespace Service;

use Domain\Prospect;

class ProspectService {

    public function __construct(){

    }
    public function isValid($prospect){

        $result = [];

        if ($prospect ->firstName == ''){
            $result['prospect.firstName'] = "FirstName is required";
        }
        if ($prospect ->lastName == ''){
            $result['prospect.lastName'] = "LastName is required";
        }
        if ($prospect ->age == ''){
            $result['prospect.age'] = "age is required";
        }
        if ($prospect ->birth == ''){
            $result['prospect.birth'] = "birth is required";
        }
        if ($prospect ->gender == ''){
            $result['prospect.gender'] = "gender is required";
        }
        if ($prospect ->phone == ''){
            $result['prospect.phone'] = "phone is required";
        }
        if ($prospect ->mail == ''){
            $result['prospect.mail'] = "mail is required";
        }
        if ($prospect ->adress == ''){
            $result['prospect.adress'] = "adress is required";
        }
        if ($prospect ->purchase == ''){
            $result['prospect.purchase'] = "purchase is required";
        }
        if ($prospect ->remarque == ''){
            $result['prospect.remarque'] = "remarque is required";
        }
        return $result;
    }

}