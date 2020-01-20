<?php
namespace Dao;
use Domain\Prospect as Prospect;

class ProspectDao extends DaoBase {
    public function __construct($config) {
        parent::__construct($config);
    }
    
    public function findAllProspects() {
        
        $result = [];
        
        $reponse = $this->bdd->query("SELECT id, firstName, lastName, age, birth, gender, phone, mail, adress, purchase, remarque FROM prospects order by id");
        
        while ($donnees = $reponse->fetch()) {
            
            $id = $donnees["id"];
            $firstName = $donnees["firstName"];
            $lastName = $donnees["lastName"];
            $age = $donnees["age"];
            $birth = $donnees["birth"];
            $gender = $donnees["gender"];
            $phone = $donnees["phone"];
            $mail = $donnees["mail"];
            $adress = $donnees["adress"];
            $purchase = $donnees["purchase"];
            $remarque = $donnees["remarque"];

            
            $prospect = new Prospect($id, $firstName, $lastName, $age, $birth, $gender, $phone, $mail, $adress, $purchase, $remarque );
            
            $result[] = $prospect;
        }
        
        $reponse->closeCursor();
        
        return $result;
    }
    
    public function findProspectById($id) {
        
        $result = NULL;
        
        $query = $this->bdd->prepare("SELECT id, firstName, lastName, age, birth, gender, phone, mail, adress, purchase, remarque FROM prospects where id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $id = $donnees["id"];
                $firstName = $donnees["firstName"];
                $lastName = $donnees["lastName"];
                $age = $donnees["age"];
                $birth = $donnees["birth"];
                $gender = $donnees["gender"];
                $phone = $donnees["phone"];
                $mail = $donnees["mail"];
                $adress = $donnees["adress"];
                $purchase = $donnees["purchase"];
                $remarque = $donnees["remarque"];

                
                $result = new Prospect($id, $firstName, $lastName, $age, $birth, $gender, $phone, $mail, $adress, $purchase, $remarque);
            }
        }
        
        $query->closeCursor();
        
        return $result;
    }
    
    public function insertProspect($prospect) {
        
        $result;
        
        $query = $this->bdd->prepare("INSERT INTO prospects (firstName, lastName, age, birth, gender, phone, mail, adress, purchase, remarque) VALUES (:firstName, :lastName, :age, :birth, :gender, :phone, :mail, :adress, :purchase, :remarque)");
        
        $query->bindParam(":firstName", $prospect->firstName);
        $query->bindParam(":lastName", $prospect->lastName);
        $query->bindParam(":age", $prospect->age);
        $query->bindParam(":birth", $prospect->birth);
        $query->bindParam(":gender", $prospect->gender);
        $query->bindParam(":phone", $prospect->phone);
        $query->bindParam(":mail", $prospect->mail);
        $query->bindParam(":adress", $prospect->adress);
        $query->bindParam(":purchase", $prospect->purchase);
        $query->bindParam(":remarque", $prospect->remarque);


        $query->execute();   
        
        $id = $this->bdd->lastInsertId();
        
        $prospect->id = $id;
        
        return $id;
    }
    
    public function deleteProspect($id) {
        
        $query = $this->bdd->prepare("DELETE FROM prospects WHERE id = :id");
        
        $query->bindParam(":id", $id);
        
        return $query->execute();
    }
    
    public function updateProspect($prospect) {
        
        $result;
        
        $query = $this->bdd->prepare("UPDATE prospects SET firstName = :firstName, lastName = :lastName, age = :age, birth = :birth, gender = :gender, phone = :phone, mail = :mail, adress = :adress, purchase = :purchase, remarque = :remarque WHERE id = :id");
        
      
        $query->bindParam(":id", $prospect->id);
        $query->bindParam(":firstName", $prospect->firstName);
        $query->bindParam(":lastName", $prospect->lastName);
        $query->bindParam(":age", $prospect->age);
        $query->bindParam(":birth", $prospect->birth);
        $query->bindParam(":gender", $prospect->gender);
        $query->bindParam(":phone", $prospect->phone);
        $query->bindParam(":mail", $prospect->mail);
        $query->bindParam(":adress", $prospect->adress);
        $query->bindParam(":purchase", $prospect->purchase);
        $query->bindParam(":remarque", $prospect->remarque);
        
        return $query->execute();

         
    }

    public function getProspect($id) {
        
        $prospect = null;
        
        $query = $this->bdd->prepare("SELECT id, firstName, lastName, age, birth, gender, phone, mail, adress, purchase, remarque FROM prospects where id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $prospect = new Prospect(
                    
                $donnees["id"],
                
                $donnees['firstName'],
                
                $donnees['lastName'],
 
                $donnees['age'],
                
                $donnees['birth'],

                $donnees['gender'],

                $donnees['phone'],

                $donnees['mail'],

                $donnees['adress'],

                $donnees['purchase'],

                $donnees['remarque']
            );


            }
        }
        
        return $prospect;
    }
}