<?php
include_once '../database/dbConnect.php';

class UserRepo{
    private $connection;

    function __construct(){
        $conn = new dbConnect;
        $this->connection=$conn->connectDB();
    }

    function insertUser($user){
        $conn = $this->connection;

        $id=$user->getId();
        $name=$user->getName();
        $username=$user->getUsername();
        $email=$user->getEmail();
        $password=$user->getPassword(); 
        $role='customer'; 
        
        $sql = "INSERT INTO user (id,name,username,email,password,role) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$username,$email,$password,$role]);
        
        echo '<script>alert("Registered!");</script>';
    }

    function getStudents(){
        $conn= $this->connection;

        $sql= "SELECT * FROM student";

        $statement= $conn->query($sql);
        $students = $statement->fetchAll();
        return $students;
    }
 
} 



?>