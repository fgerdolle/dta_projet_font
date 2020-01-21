<?php
namespace Domain;
class RDV {
    public $id;

    public $date;

    public $time;
    
    public $firstName;
    
    public $lastName;

    public $phone;

    public $mail;

    public $adress;

    public $remarque;
    
    public function __construct($id, $date, $time, $firstName, $lastName, $phone, $mail , $adress, $remarque) {
        
        $this->id = $id;

        $this->date = $date;
        
        $this->time = $time;
        
        $this->firstName = $firstName;
        
        $this->lastName = $lastName;

        $this->phone = $phone;

        $this->mail = $mail;

        $this->adress = $adress;

        $this->remarque = $remarque;

    }
}