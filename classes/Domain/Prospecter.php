<?php
namespace Domain;
class Prospecter {
    public $id;
    
    public $idUser;
    
    public $name;

    public $mail;

    public $phone;

    public $job;

    public $experience;

    public $salary;

    public $langue;

    public $availability;

    public $biographie;

    public $description;

    
    public function __construct($id, $idUser, $name, $mail, $phone, $job, $experience, $salary , $langue, $availability, $biographie, $description) {
        
        $this->id = $id;
        
        $this->idUser = $idUser;
        
        $this->name = $name;

        $this->mail = $mail;

        $this->phone = $phone;

        $this->job = $job;
        
        $this->experience = $experience;

        $this->salary = $salary;

        $this->langue = $langue;

        $this->availability = $availability;

        $this->biographie = $biographie;

        $this->description = $description;



    }
}