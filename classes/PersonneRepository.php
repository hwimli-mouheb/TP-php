<?php
include_once 'autoload.php';

class PersonneRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('Personne');
    }
    public function deleteByName($name) {
        $request = "delete from ".$this->tableName ." where name = ?";
        $response =$this->bd->prepare($request);
        $response->execute([$name]);
        return $response->fetch(PDO::FETCH_OBJ);
    }
    public function findByName($name) {
        $request = "select * from ".$this->tableName ." where name = ? ";
        $response =$this->bd->prepare($request);
        $response->execute([$name]);
        return $response->fetch(PDO::FETCH_OBJ);
    }
    public function updateByName($name,$firstname,$job,$age,$name1){
        $request = "update ".$this->tableName ." set 
        name = ? , firstname =? , age = ? , job = ? where name = ?"
        ;
        $response =$this->bd->prepare($request);
        $response->execute([$name,$firstname,$age,$job,$name1]);
        return $response->fetch(PDO::FETCH_OBJ);
    }
    public function insert($name,$firstname,$job,$age){
        $request = "insert into ".$this->tableName ." values (? , ? , ? , ?)";
        $response =$this->bd->prepare($request);
        $response->execute([$name,$firstname,$age,$job]);

    }
}