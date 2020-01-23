<?php
namespace Dao;
use Domain\Salade as Salade;

class SaladesDao extends DaoBase {
    public function __construct($config) {
        parent::__construct($config);
    }
    
    public function findAllSalades() {
        
        $result = [];
        
        $reponse = $this->bdd->query("SELECT id, photo, name, price, description FROM salades order by id");
        
        while ($donnees = $reponse->fetch()) {
            
            $id = $donnees["id"];
            $photo = $donnees["photo"];
            $name = $donnees["name"];
            $price = $donnees["price"];
            $description = $donnees["description"];


            
            $salade = new Salade($id, $photo, $name, $price, $description);
            
            $result[] = $salade;
        }
        
        $reponse->closeCursor();
        
        return $result;
    }
    
    public function findSaladeById($id) {
        
        $result = NULL;
        
        $query = $this->bdd->prepare("SELECT id, photo, name, price, description FROM salades where id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $id = $donnees["id"];
                $photo = $donnees["photo"];
                $name = $donnees["name"];
                $price = $donnees["price"];
                $description = $donnees["description"];


                
                $result = new Salade ($id, $photo, $name, $price, $description);
            }
        }
        
        $query->closeCursor();
        
        return $result;
    }
    
    public function insertSalade($salade) {
        
        $result;
        
        $query = $this->bdd->prepare("INSERT INTO salades (photo, name, price, description) VALUES (:photo, :name, :price, :description)");
        
        $query->bindParam(":photo", $salade->photo);
        $query->bindParam(":name", $salade->name);
        $query->bindParam(":price", $salade->price);
        $query->bindParam(":description", $salade->description);



        $query->execute();   
        
        $id = $this->bdd->lastInsertId();
        
        $salade->id = $id;
        
        return $id;
    }
    
    public function deleteSalade($id) {
        
        $query = $this->bdd->prepare("DELETE FROM salades WHERE id = :id");
        
        $query->bindParam(":id", $id);
        
        return $query->execute();
    }
    
    public function updateSalade($salade) {
        
        $result;
        
        $query = $this->bdd->prepare("UPDATE salades SET photo = :photo, name = :name, price = :price, description = :description WHERE id = :id");
        
      
        $query->bindParam(":id", $salade->id);
        $query->bindParam(":photo", $salade->photo);
        $query->bindParam(":name", $salade->name);
        $query->bindParam(":price", $salade->price);
        $query->bindParam(":description", $salade->description);

        
        return $query->execute();

         
    }

    public function getSalade($id) {
        
        $salade = null;
        
        $query = $this->bdd->prepare("SELECT id, photo, name, price, description FROM salades where id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $salade = new Salade(
                    
                $donnees["id"],
                
                $donnees['photo'],
                
                $donnees['name'],

                $donnees['price'],

                $donnees['description']
                

            );


            }
        }
        
        return $salade;
    }
}