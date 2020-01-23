<?php
namespace Dao;
use Domain\Oignon as Oignon;

class OignonsDao extends DaoBase {
    public function __construct($config) {
        parent::__construct($config);
    }
    
    public function findAllOignons() {
        
        $result = [];
        
        $reponse = $this->bdd->query("SELECT id, photo, name, price, description FROM oignons order by id");
        
        while ($donnees = $reponse->fetch()) {
            
            $id = $donnees["id"];
            $photo = $donnees["photo"];
            $name = $donnees["name"];
            $price = $donnees["price"];
            $description = $donnees["description"];


            
            $oignon = new Oignon($id, $photo, $name, $price, $description);
            
            $result[] = $oignon;
        }
        
        $reponse->closeCursor();
        
        return $result;
    }
    
    public function findOignonById($id) {
        
        $result = NULL;
        
        $query = $this->bdd->prepare("SELECT id, photo, name, price, description FROM oignons where id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $id = $donnees["id"];
                $photo = $donnees["photo"];
                $name = $donnees["name"];
                $price = $donnees["price"];
                $description = $donnees["description"];


                
                $result = new Oignon ($id, $photo, $name, $price, $description);
            }
        }
        
        $query->closeCursor();
        
        return $result;
    }
    
    public function insertOignon($oignon) {
        
        $result;
        
        $query = $this->bdd->prepare("INSERT INTO oignons (photo, name, price, description) VALUES (:photo, :name, :price, :description)");
        
        $query->bindParam(":photo", $oignon->photo);
        $query->bindParam(":name", $oignon->name);
        $query->bindParam(":price", $oignon->price);
        $query->bindParam(":description", $oignon->description);



        $query->execute();   
        
        $id = $this->bdd->lastInsertId();
        
        $oignon->id = $id;
        
        return $id;
    }
    
    public function deleteOignon($id) {
        
        $query = $this->bdd->prepare("DELETE FROM oignons WHERE id = :id");
        
        $query->bindParam(":id", $id);
        
        return $query->execute();
    }
    
    public function updateOignon($oignon) {
        
        $result;
        
        $query = $this->bdd->prepare("UPDATE oignons SET photo = :photo, name = :name, price = :price, description = :description WHERE id = :id");
        
      
        $query->bindParam(":id", $oignon->id);
        $query->bindParam(":photo", $oignon->photo);
        $query->bindParam(":name", $oignon->name);
        $query->bindParam(":price", $oignon->price);
        $query->bindParam(":description", $oignon->description);

        
        return $query->execute();

         
    }

    public function getOignon($id) {
        
        $oignon = null;
        
        $query = $this->bdd->prepare("SELECT id, photo, name, price, description FROM oignons where id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $oignon = new Oignon(
                    
                $donnees["id"],
                
                $donnees['photo'],
                
                $donnees['name'],

                $donnees['price'],

                $donnees['description']
                

            );


            }
        }
        
        return $oignon;
    }
}