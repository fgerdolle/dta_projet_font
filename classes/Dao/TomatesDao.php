<?php
namespace Dao;
use Domain\Tomate as Tomate;

class TomatesDao extends DaoBase {
    public function __construct($config) {
        parent::__construct($config);
    }
    
    public function findAllTomates() {
        
        $result = [];
        
        $reponse = $this->bdd->query("SELECT id, photo, name, price, description FROM tomates order by id");
        
        while ($donnees = $reponse->fetch()) {
            
            $id = $donnees["id"];
            $photo = $donnees["photo"];
            $name = $donnees["name"];
            $price = $donnees["price"];
            $description = $donnees["description"];


            
            $tomate = new Tomate($id, $photo, $name, $price, $description);
            
            $result[] = $tomate;
        }
        
        $reponse->closeCursor();
        
        return $result;
    }
    
    public function findTomateById($id) {
        
        $result = NULL;
        
        $query = $this->bdd->prepare("SELECT id, photo, name, price, description FROM tomates where id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $id = $donnees["id"];
                $photo = $donnees["photo"];
                $name = $donnees["name"];
                $price = $donnees["price"];
                $description = $donnees["description"];


                
                $result = new Tomate ($id, $photo, $name, $price, $description);
            }
        }
        
        $query->closeCursor();
        
        return $result;
    }
    
    public function insertTomate($tomate) {
        
        $result;
        
        $query = $this->bdd->prepare("INSERT INTO tomates (photo, name, price, description) VALUES (:photo, :name, :price, :description)");
        
        $query->bindParam(":photo", $tomate->photo);
        $query->bindParam(":name", $tomate->name);
        $query->bindParam(":price", $tomate->price);
        $query->bindParam(":description", $tomate->description);



        $query->execute();   
        
        
    }
    
    public function deleteTomate($id) {
        
        $query = $this->bdd->prepare("DELETE FROM tomates WHERE id = :id");
        
        $query->bindParam(":id", $id);
        
        return $query->execute();
    }
    
    public function updateTomate($tomate) {
        
        $result;
        
        $query = $this->bdd->prepare("UPDATE tomates SET photo = :photo, name = :name, price = :price, description = :description WHERE id = :id");
        
      
        $query->bindParam(":id", $tomate->id);
        $query->bindParam(":photo", $tomate->photo);
        $query->bindParam(":name", $tomate->name);
        $query->bindParam(":price", $tomate->price);
        $query->bindParam(":description", $tomate->description);

        
        return $query->execute();

         
    }

    public function getTomate($id) {
        
        $tomate = null;
        
        $query = $this->bdd->prepare("SELECT id, photo, name, price, description FROM tomates where id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $tomate = new Tomate(
                    
                $donnees["id"],
                
                $donnees['photo'],
                
                $donnees['name'],

                $donnees['price'],

                $donnees['description']
                

            );


            }
        }
        
        return $tomate;
    }
}