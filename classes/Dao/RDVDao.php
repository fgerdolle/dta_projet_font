<?php
namespace Dao;
use Domain\RDV as RDV;

class RDVDao extends DaoBase {
    public function __construct($config) {
        parent::__construct($config);
    }
    
    public function findAllRDV() {
        
        $result = [];
        
        $reponse = $this->bdd->query("SELECT id, date, time, firstName, lastName, phone, mail, adress, remarque FROM RDV order by id");
        
        while ($donnees = $reponse->fetch()) {
                
            $rdv = new RDV(
                
            $donnees["id"],

            $donnees['date'],
            
            $donnees['time'],
            
            $donnees['firstName'],
            
            $donnees['lastName'],

            $donnees['phone'],

            $donnees['mail'],

            $donnees['adress'],

            $donnees['remarque']
        );

            
            $result[] = $rdv;
        }
        
        $reponse->closeCursor();
        
        return $result;
    }
    
    public function findRDVById($id) {
        
        $result = NULL;
        
        $query = $this->bdd->prepare("SELECT id,date,time, firstName, lastName, phone, mail, adress, remarque FROM RDV where id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $id = $donnees["id"];
                $date = $donnees["date"];
                $time = $donnees["time"];
                $firstName = $donnees["firstName"];
                $lastName = $donnees["lastName"];
                $phone = $donnees["phone"];
                $mail = $donnees["mail"];
                $adress = $donnees["adress"];
                $remarque = $donnees["remarque"];

                
                $result = new RDV($id,  $date, $time, $firstName, $lastName, $phone, $mail, $adress, $remarque);
            }
        }
        
        $query->closeCursor();
        
        return $result;
    }
    
    public function insertRDV($rdv) {
        
        $result;
        
        $query = $this->bdd->prepare("INSERT INTO RDV (date, time, firstName, lastName, phone, mail, adress, remarque) VALUES (:date, :time, :firstName, :lastName, :phone, :mail, :adress, :remarque)");
        
        $query->bindParam(":date", $rdv->date);
        $query->bindParam(":time", $rdv->time);
        $query->bindParam(":firstName", $rdv->firstName);
        $query->bindParam(":lastName", $rdv->lastName);
        $query->bindParam(":phone", $rdv->phone);
        $query->bindParam(":mail", $rdv->mail);
        $query->bindParam(":adress", $rdv->adress);
        $query->bindParam(":remarque", $rdv->remarque);


        $query->execute();   
        
        $id = $this->bdd->lastInsertId();
        
        $rdv->id = $id;
        
        return $id;
    }
    
    public function deleteRDV($id) {
        
        $query = $this->bdd->prepare("DELETE FROM RDV WHERE id = :id");
        
        $query->bindParam(":id", $id);
        
        return $query->execute();
    }
    
    public function updateRDV($rdv) {
        
        $result;
        
        $query = $this->bdd->prepare("UPDATE RDV SET date = :date, time = :time, firstName = :firstName, lastName = :lastName, phone = :phone, mail = :mail, adress = :adress, remarque = :remarque WHERE id = :id");
        
        $query->bindParam(":id", $rdv->id);
        $query->bindParam(":date", $rdv->date);
        $query->bindParam(":time", $rdv->time);
        $query->bindParam(":firstName", $rdv->firstName);
        $query->bindParam(":lastName", $rdv->lastName);
        $query->bindParam(":phone", $rdv->phone);
        $query->bindParam(":mail", $rdv->mail);
        $query->bindParam(":adress", $rdv->adress);
        $query->bindParam(":remarque", $rdv->remarque);
        
        return $query->execute();

         
    }

    public function getRDV($id) {
        
        $rdv = null;
        
        $query = $this->bdd->prepare("SELECT id, date, time, firstName, lastName, phone, mail, adress, remarque FROM RDV where id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $rdv = new RDV(
                    
                $donnees["id"],

                $donnees['date'],
                
                $donnees['time'],
                
                $donnees['firstName'],
                
                $donnees['lastName'],

                $donnees['phone'],

                $donnees['mail'],

                $donnees['adress'],

                $donnees['remarque']
            );


            }
        }
        
        return $rdv;
    }
}