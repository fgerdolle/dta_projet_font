<?php
namespace Dao;
use Domain\Prospecter as Prospecter;

class ProspecterDao extends DaoBase {
    public function __construct($config) {
        parent::__construct($config);
    }
    
    public function findAllProspecters() {
        
        $result = [];
        
        $reponse = $this->bdd->query("SELECT id, idUser, name, mail, phone, job, experience, salary, langue, availability, biographie, description FROM prospecters order by id");
        
        while ($donnees = $reponse->fetch()) {
            
            $id = $donnees["id"];
            $idUser = $donnees["idUser"];
            $name = $donnees["name"];
            $mail = $donnees["mail"];
            $phone = $donnees["phone"];
            $job = $donnees["job"];
            $experience = $donnees["experience"];
            $salary = $donnees["salary"];
            $langue = $donnees["langue"];
            $availability = $donnees["availability"];
            $biographie = $donnees["biographie"];
            $description = $donnees["description"];


            
            $prospecter = new Prospecter($id, $idUser, $name, $mail, $phone, $job, $experience, $salary, $langue, $availability, $biographie, $description);
            
            $result[] = $prospecter;
        }
        
        $reponse->closeCursor();
        
        return $result;
    }
    
    public function findProspecterById($id) {
        
        $result = NULL;
        
        $query = $this->bdd->prepare("SELECT id, idUser, name, mail, phone, job, experience, salary, langue, availability, biographie, description FROM prospecters where id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $id = $donnees["id"];
                $idUser = $donnees["idUser"];
                $name = $donnees["name"];
                $mail = $donnees["mail"];
                $phone = $donnees["phone"];
                $job = $donnees["job"];
                $experience = $donnees["experience"];
                $salary = $donnees["salary"];
                $langue = $donnees["langue"];
                $availability = $donnees["availability"];
                $biographie = $donnees["biographie"];
                $description = $donnees["description"];


                
                $result = new Prospecter ($id, $idUser, $name, $mail, $phone, $job, $experience, $salary, $langue, $availability, $biographie, $description);
            }
        }
        
        $query->closeCursor();
        
        return $result;
    }
    
    public function insertProspecter($prospecter) {
        
        $result;
        
        $query = $this->bdd->prepare("INSERT INTO prospecters (idUser, name, mail, phone, job, experience, salary, langue, availability, biographie, descriptions) VALUES (:idUser, :name, :mail, :phone, :job, :experience, :salary, :langue, :availability, :biographie, :description)");
        
        $query->bindParam(":idUser", $prospecter->idUser);
        $query->bindParam(":name", $prospecter->name);
        $query->bindParam(":mail", $prospecter->mail);
        $query->bindParam(":phone", $prospecter->phone);
        $query->bindParam(":job", $prospecter->job);
        $query->bindParam(":experience", $prospecter->experience);
        $query->bindParam(":salary", $prospecter->salary);
        $query->bindParam(":langue", $prospecter->langue);
        $query->bindParam(":availability", $prospecter->availability);
        $query->bindParam(":biographie", $prospecter->biographie);
        $query->bindParam(":description", $prospecter->description);



        $query->execute();   
        
        $id = $this->bdd->lastInsertId();
        
        $prospecter->id = $id;
        
        return $id;
    }
    
    public function deleteProspecter($id) {
        
        $query = $this->bdd->prepare("DELETE FROM prospecters WHERE id = :id");
        
        $query->bindParam(":id", $id);
        
        return $query->execute();
    }
    
    public function updateProspecter($prospecter) {
        
        $result;
        
        $query = $this->bdd->prepare("UPDATE prospecters SET idUser = :iduser, name = :name, mail = :mail, phone = :phone, job = :job, experience = :experience, salary = :salary, langue = :langue, availability = :availability, biographie = :biographie, description = :description WHERE id = :id");
        
      
        $query->bindParam(":id", $prospecter->id);
        $query->bindParam(":idUser", $prospecter->idUser);
        $query->bindParam(":name", $prospecter->name);
        $query->bindParam(":mail", $prospecter->mail);
        $query->bindParam(":phone", $prospecter->phone);
        $query->bindParam(":job", $prospecter->job);
        $query->bindParam(":experience", $prospecter->experience);
        $query->bindParam(":salary", $prospecter->salary);
        $query->bindParam(":langue", $prospecter->langue);
        $query->bindParam(":availability", $prospecter->availability);
        $query->bindParam(":biographie", $prospecter->biographie);
        $query->bindParam(":description", $prospecter->description);

        
        return $query->execute();

         
    }

    public function getProspecter($id) {
        
        $prospecter = null;
        
        $query = $this->bdd->prepare("SELECT id, idUser, name, mail, phone, job, experience, salary, langue, availability, biographie, description FROM prospecters where id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $prospecter = new Prospecter(
                    
                $donnees["id"],
                
                $donnees['idUser'],
                
                $donnees['name'],

                $donnees['mail'],

                $donnees['phone'],

                $donnees['job'],
                
                $donnees['experience'],

                $donnees['salary'],

                $donnees['langue'],

                $donnees['availability'],

                $donnees['biographie'],

                $donnees['description']
                

            );


            }
        }
        
        return $prospecter;
    }
}