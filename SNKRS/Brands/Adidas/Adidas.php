<?php
    session_start();
    require_once('../../../connect.php');
    if (isset($_GET['logout'])) {
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

    <title> ADIDAS </title>

    <script src="https://kit.fontawesome.com/e6f31724cf.js" crossorigin="anonymous"> </script>
    
    <link rel="stylesheet" href="../../../CSS/Style-Brands.css">

</head>

<body>

    <div class="Header">
        <div class="Container">

            <!-- Menu Bar -->
            <div class="Menu-Bar">
                <div class="Logo">
                    <a href="../../../Index.php" class="logo"> Shoe </a>
                </div>

                <Nav>
                    <Ul>

                        <!-- List JSON -->
                        <div class="Dropdown-Brand">
                            <Li> <a href="../JsonBrand.php"> List </a> </Li>
                        </div>

                        <!-- Brands -->
                        <div class="Dropdown-Brand">
                            <Li> <a href=""> Brands </a> </Li>
                            <div class="Brand-Content">
                                <a href="../../Brands/Nike/Nike.php"> Nike </a>
                                <a href="../../Brands/Adidas/Adidas.php"> Adidas </a>
                            </div>
                        </div>

                        <!-- News -->
                        <div class="Dropdown-Brand">
                            <Li> <a href="../../News/News.php"> News </a> </Li>
                        </div>

                        <!-- Log In & Log Out -->
                        <div class="Dropdown-Brand">
                            <?php if (isset($_SESSION['username'])) { ?>
                                <Li> <a href="../../../Index.php?logout='1'"> Log Out </a> </Li>
                            <?php } else { ?>
                                <Li> <a href="../../../Login.php"> Log In </a> </Li>
                            <?php } ?>
                        </div>

                        <!-- Cart -->
                        <div class="Dropdown-Brand">
                            <Li> <a href="../../../cart.php"> <i class="fa-sharp fa-solid fa-bag-shopping"></i> </a> </Li>
                        </div>

                        <!-- User -->
                        <div class="Dropdown-Brand">
                            <Li> <a href="../../../user.php"> <i class="fa-solid fa-user"> </i> </a> </Li>
                        </div>

                        <!-- User -->
                        <div class="Dropdown-Brand">
                            <?php if (isset($_SESSION['username'])) { ?>
                                <li>
                                    <b>
                                        <?php echo $_SESSION['username']; ?>
                                    </b>
                                </li>
                            <?php } ?>
                        </div>
                        
                    </Ul>
                </Nav>
            </div>

        </div>
    </div>

    <div class="Layout">

        <!-- Adidas --> <br>
        <div class="Brands">
            <h2> ADIDAS </h2>
        </div>
    
        <div class="display-section">
            <?php
                $items = $pdo->prepare("SELECT * FROM item where Type_item = 'Adidas' ");
                $items->execute();
                if ($items->rowCount() > 0) {
                    while ($row = $items->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="box">
                <form action="../../../cart.php" method="post">
                    <div class="img-shoe">
                            <img src="../../img/<?php echo $row['Image_item']; ?>" width="350px" height="200px">
                        </div>
                        <div class="item-name">
                            <?php echo $row['Item_name']; ?>
                        </div>
                        <div class="item-price">
                            <b> <?php echo $row['Item_price']; ?> ฿ </b>
                        </div>
                        <input type="hidden" name="ID_Item" value=<?php echo $row["ID_Item"]; ?>>
                        <input type="submit" name="add" value="Addtocart" class="add-to-cart">
                </form>
            </div>
            <?php 
                }
                }
            ?>    
        </div>
        
    </div>
    
</body>

</html>