<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    
    <link rel="stylesheet" href="../css/addProduct.css">
    <style>
        table,th,td {
            border:solid 1px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="..\img\logo.png" alt="">
                </div>
               
               
                <img src="..\Img\menuIcon.png" alt="" class="menuIcon" onclick="menuToggle()">
            </div>
        </div>
    </header>
<main>
    <?php 
        include('../dashboard/dashLeft.php');
    ?>
    <div class="rightMenu">
        <div class="cont1">

        <table>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Author Name</th>
            <th>Product Description</th>
            <th>Price</th>
            <th>Category</th>
        </tr>

        <?php
        
        include_once '../repository/ProductRepo.php';

        $prodR = new ProductRepo();
        $products = $prodR->getProducts();
        foreach($products as $product){
            echo
            "
            <tr>
                <td>$product[pid]</td>
                <td>$product[pname]</td>
                <td>$product[aname]</td>
                <td>$product[pdesc]</td>
                <td>$product[price]</td>
                <td>$product[category]</td>
            </tr>
            
            ";
        }
        
        ?>
    </table>
        </div>
        
    </div>
</main>
    
</body>
</html>