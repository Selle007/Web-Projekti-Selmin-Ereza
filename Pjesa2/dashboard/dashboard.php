<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link rel="stylesheet" href="..\css\dashboard.css">
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
    <div class="leftMenu">
        <ul>

            <li><strong>Hello, ADMIN</strong> </li>
            <li><a href="">Dashboard</a></li>
            <li><a href="../">Products</a></li>
            <li><a href="">Orders</a></li>
            <li><a href="">Completed</a></li>
            <li><a href="">Users</a></li>


            <li><a href="">Log Out</a></li>
    

        </ul>
    </div>
    <div class="rightMenu">
        <div class="cont1">
            <a href="dashboard.php"><input type="submit" value="Products"></a>
            <a href=""><input type="submit" value="Orders"></a>
            <a href=""><input type="submit" value="Users"></a>
            
        </div>
    </div>
</main>
    
</body>
</html>