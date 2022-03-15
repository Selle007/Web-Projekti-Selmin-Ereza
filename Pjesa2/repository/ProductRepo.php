<?php
include_once '../database/dbConnect.php';

class ProductRepo{
    private $connection;

    function __construct(){
        $conn = new dbConnect;
        $this->connection=$conn->connectDB();
    }

    function insertProduct($product){
        $conn = $this->connection;

        $pid=$product->getPid();
        $pname=$product->getProductName();
        $aname=$product->getAuthorName();
        $pdesc=$product->getDescription();
        $price=$product->getPrice(); 
        $category=$product->getCategory();
        
        $sql = "INSERT INTO product (pid,pname,aname,pdesc,price,category) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$pid,$pname,$aname,$pdesc,$price,$category]);
        
        echo '<script>alert("Product added!");</script>';
    }

    function getProducts(){
        $conn= $this->connection;

        $sql= "SELECT * FROM product";

        $statement= $conn->query($sql);
        $products = $statement->fetchAll();
        return $products;
    }
 
} 



?>