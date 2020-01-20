<?php
namespace Domain;
class Prospect {
    public $id;
    
    public $firstName;
    
    public $lastName;

    public $age;

    public $birth;

    public $gender;

    public $phone;

    public $mail;

    public $adress;

    public $purchase;

    public $remarque;
    
    public function __construct($id, $firstName, $lastName, $age, $birth, $gender, $phone, $mail , $adress, $purchase, $remarque) {
        
        $this->id = $id;
        
        $this->firstName = $firstName;
        
        $this->lastName = $lastName;

        $this->age = $age;
        
        $this->birth = $birth;

        $this->gender = $gender;

        $this->phone = $phone;

        $this->mail = $mail;

        $this->adress = $adress;

        $this->purchase = $purchase;

        $this->remarque = $remarque;

    }
}