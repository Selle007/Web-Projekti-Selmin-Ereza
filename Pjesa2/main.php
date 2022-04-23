<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Projekti Selmin & Ereza - Bookstore</title>
    <link rel="stylesheet" href="css/style.css">
  

</head>

<body>

<?php
include('snippet/navbar.php');
?>
    
    <header>
        <div class="image">
            <div class="search">
                <input class="searchbar" type="text" placeholder="Search"
                    style="font-size: 15px; padding-left: 15px; color:black;">
            </div>
        </div>
    </header>

    <br>
    
    <div class="bestseller">
    <h2><span>Best Sellers</span></h2>
    <br>
    <div class="products">
        <?php
        include_once "repository/ProductRepo.php";

        $prodR = new ProductRepo;

        $products = $prodR->getBestSeller(); 

        foreach($products as $product): 
        ?>
                
                    <div class="productblock">
                        <img src="Img/<?=$product['pname']?>.jpg" alt="">
                        <div class="productRight">
                            <div class="productText">
                                <p id="productName"><?=$product['pname']?></p>
                                <p id="author"><?=$product['aname']?></p>
                                <p id="textDesc"><Strong><?=$product['pdesc']?> 
                                    </Strong></p>
                            </div>
                            <div class="price">
                                <p id="price"><strong><?=$product['price']?></strong></p><br>
                                <div class="buttons">
                                    <button id="submit">Add to Cart</button>
                                    <img src="Img\wishlist.png" alt="">
                                </div>
                            </div>
                        </div>
                    
                    </div>
            
            <?php endforeach; ?>
    </div>
    
<!------------------------------------------------------>

    <div class="comingMain">    
            <h2><span>Coming Soon</span></h2><br>
            <div class="comingHead">
            <?php
                include_once "repository/ProductRepo.php";

                $prodR = new ProductRepo;

                $products = $prodR->getComingSoon(); 

                foreach($products as $product): 
            ?>
            
                
                <div class="comingBlock">
                    <img src="Img/<?=$product['pname']?>.jpg" alt="">
                        <div class="comingText">
                            <p id="productName"><?=$product['pname']?></p>
                            <p id="author"><?=$product['aname']?></p>
                            <p id="textDesc"><Strong><?=$product['pdesc']?></Strong></p>
                            
                        </div>
                </div>
                <?php endforeach; ?>
            </div>
                
        <!------------------------------------------------------>

    

   
<?php
include('snippet/footer.php');
?>
</body>

</html>

