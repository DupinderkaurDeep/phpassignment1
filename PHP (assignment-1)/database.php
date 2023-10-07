<?php
error_reporting(E_ALL);
ini_set('display_errors',10);
class Database{
// For storing the database connection
private $connection;
function __construct(){
  
$this->connect_db();
}

public function connect_db(){
    $this->connection =mysqli_connect('172.31.22.43', 'Dupinder200553418', 'LM2S7SYfYP', 'Dupinder200553418');
    if(mysqli_connect_error()){// for checking database connection error
        die ("Database connection failed" . mysqli_connect_error());
    }
}
// for inserting data in order table
public function create($fullname,$phone,$email,$address_,$pizza_size,$crust,$toppings,$sauce){

    $sql = "INSERT INTO pizza_site (fullname, phone, email, address_, pizza_size, crust, toppings, sauce)
        VALUES ('$fullname', '$phone', '$email', '$address_', '$pizza_size', '$crust', '$toppings', '$sauce')";
    $res =mysqli_query($this->connection, $sql);
   // according to the succuss true or false is retured here
    if($res){
        return true;
    } else{
        return false;
    }
}

public function read($id=null){
    $sql = "SELECT * FROM pizza_site"; // here sql is defined
    if($id){
        $sql .= " WHERE id=$id";
    }
    $res = mysqli_query($this->connection, $sql); // this is used to execute sql
    return $res;
}

public function sanitize ($var){
    $return =mysqli_real_escape_string($this->connection, $var);
    return $return; // here value is retured
}
}

$database =new Database ();
?>