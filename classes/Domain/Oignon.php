<?php
namespace Domain;
class Oignon {
    public $id;
    
    public $photo;
    
    public $name;

    public $price;

    public $description;

    public function __construct($id, $photo, $name, $price, $description) {
        
        $this->id = $id;
        
        $this->photo = $photo;
        
        $this->name = $name;

        $this->description = $description;
        

    }
}