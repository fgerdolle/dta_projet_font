<?php
namespace Service;

use Domain\Prospecter as Prospecter;

class ProspecterService {

    public function __construct(){

    }
    public function isValid($prospecter){

        $result = [];

        if ($prospecter ->idUser == ''){
            $result['prospecter.idUser'] = "IdUser is required";
        }
        if ($prospecter ->name == ''){
            $result['prospecter.name'] = "Name is required";
        }
        if ($prospecter ->mail == ''){
            $result['prospecter.mail'] = "mail is required";
        }
        if ($prospecter ->phone == ''){
            $result['prospecter.phone'] = "phone is required";
        }
        if ($prospecter ->job == ''){
            $result['prospecter.job'] = "Job is required";
        }
        if ($prospecter ->experience == ''){
            $result['prospecter.experience'] = "Experience is required";
        }
        if ($prospecter ->salary == ''){
            $result['prospecter.salary'] = "Salary is required";
        }
        if ($prospecter ->langue == ''){
            $result['prospecter.langue'] = "Langue is required";
        }
        if ($prospecter ->availability == ''){
            $result['prospecter.availability'] = "Availability is required";
        }
        return $result;
    }

}