<?php


class DB{


public $DB_HOST;

public $DB_NAME;

public $DB_USER;

public $DB_PASSWORD;
public $conn;

public $SQL;


// construct function will call, automatically when you create an object

public function __construct(){

$this->DB_HOST = '';

$this->DB_NAME = '';

$this->DB_USER ='';

$this->DB_PASSWORD = '';

$this->conn = null;

$this->sql = '';
$this->dbconnect();


}


 

public function dbconnect(){

$this->conn = mysqli_conncet($this->DB_HOST,$this->DB_NAME,$this->DB_USER,$this->DB_PASSWORD);


// if the connection is true,do something 

// if the connection is not true write an error message


if(!$this->conn){

return "Database connection error";


}

mysqli_select_db($this->conn,$this->DB_NAME)

}







}




















?>