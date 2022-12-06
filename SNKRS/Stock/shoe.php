<?php include('../../connect.php'); ?>

<?php
    session_start();
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: Index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> SHOE BRANDS </title>

    <script src="https://kit.fontawesome.com/e6f31724cf.js" crossorigin="anonymous"> </script>

    <link rel="stylesheet" href="../../CSS/Style-Stock.css">

    <style>
    /* Button : Add to Cart */
    .add-to-cart {
        background-color: black;
        border-radius: 8px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    </style>

</head>

<body>

    <div class="Header">
        <div class="Container">

            <!-- Menu Bar -->
            <div class="Menu-Bar">
                <div class="Logo">
                    <a href="../../Index.php" class="logo"> Shoe<span>.</span></a>
                </div>
                
                <Nav>
                    <Ul>
                        
                        <!-- Brands -->
                        <div class="Dropdown-Brand">
                            <Li> <a href="./SNKRS/Brands/JsonBrand.php"> List </a> </Li>
                        </div>

                        <!-- Brands -->
                        <div class="Dropdown-Brand">
                            <Li> <a href=""> Brands </a> </Li>
                            <div class="Brand-Content">
                                <a href="../Brands/Nike/Nike.php"> Nike </a>
                                <a href="../Brands/Adidas/Adidas.php"> Adidas </a>
                            </div>
                        </div>

                        <!-- News -->
                        <div class="Dropdown-Brand">
                            <Li> <a href="../News/News.php"> News </a> </Li>
                        </div>

                        <!-- Log In & Log Out -->
                        <div class="Dropdown-Brand">
                            <?php if(isset($_SESSION['username'])) { ?>
                                <Li> <a href="../../Index.php?logout='1'"> Log Out </a> </Li>
                            <?php } else { ?>
                                <Li> <a href="../../Login.php"> Log In </a> </Li>
                            <?php } ?>
                        </div>

                        <!-- Cart -->
                        <div class="Dropdown-Brand">
                            <Li> <a href="../../cart.php"> <i class="fa-sharp fa-solid fa-bag-shopping"></i> </a> </Li>
                        </div>

                        <!-- User -->
                        <div class="Dropdown-Brand">
                            <Li> <a href="../../user.php"> <i class="fa-solid fa-user"> </i> </a> </Li>
                        </div>

                        <!-- Name -->
                        <div class="Dropdown-Brand">
                            <?php if(isset($_SESSION['username'])) {
                                ?> <li> <b> <?php echo $_SESSION['username'];?> </b> </li>
                            <?php } ?>
                        </div>

                    </Ul>
                </Nav>   
            </div>

        </div>

        <div class="Layout">

            <?php 
                $page = $_GET["data"];
                $item = $pdo->prepare("SELECT * FROM item Where ID_Item = $page");
                $item->execute();
                $row= $item->fetch();
            ?>

            <form class="Contain" action="../../cart.php" method="post">

                <div class="Stock-Left">
                    <img src="../img/<?php echo $row['Image_item']; ?>">
                </div>
                                
                <div class="Stock-Right">
                    <div class="price">
                        <b> <?php echo $row['Item_name']; ?> : </b> 
                        <?php echo $row['Item_price']; ?> ฿
                    </div> <br>
            
                    <div class="Num">
                        <div class="Sub">
                            <input type="hidden" name="ID_Item" value=<?php echo $row['ID_Item']; ?>>
                            <input type="submit" name="add" value="Add to cart" class="add-to-cart">
                        </div>
                    </div> <br>
  
                    <fieldset>
                        <legend class="Detail"> Details </legend>
                        <br> <p class="Text"><?php echo $row['Item_name']; ?> </p> <br>
                    </fieldset>
                </div>

            </form>
        </div>

    </div>

</body>

</html>