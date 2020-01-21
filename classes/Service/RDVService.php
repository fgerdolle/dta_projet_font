<?php
namespace Service;

use Domain\RDV as RDV;

class RDVService {

    public function __construct(){

    }
    public function isValid($rdv){

        $result = [];

        if ($rdv ->date == ''){
            $result['rdv.date'] = "Date is required";
        }
        if ($rdv ->time == ''){
            $result['rdv.time'] = "Time is required";
        }
        if ($rdv ->firstName == ''){
            $result['rdv.firstName'] = "FirstName is required";
        }
        if ($rdv ->lastName == ''){
            $result['rdv.lastName'] = "LastName is required";
        }
        if ($rdv ->phone == ''){
            $result['rdv.phone'] = "Phone is required";
        }
        if ($rdv ->mail == ''){
            $result['rdv.mail'] = "Mail is required";
        }
        if ($rdv ->adress == ''){
            $result['rdv.adress'] = "Adress is required";
        }
        if ($rdv ->remarque == ''){
            $result['rdv.remarque'] = "Remarque is required";
        }
        return $result;
    }

}