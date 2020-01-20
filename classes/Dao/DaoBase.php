<?php
Namespace Dao;

Class DaoBase {

    protected $bdd;

    public function __construct($config){

        $this->bdd = new \PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", 
                                DB_USERNAME,                     
                                DB_PASSWORD);
    }

    public function close(){
        $this->bdd = null ;
    }
}