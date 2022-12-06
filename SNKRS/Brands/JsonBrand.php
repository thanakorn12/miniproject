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

    <link rel="stylesheet" href="../../CSS/Style-Brands.css">

</head>

<body>

    <div class="Header">
        <div class="Container">

            <!-- Menu Bar -->
            <div class="Menu-Bar">
                <div class="Logo">
                    <a href="../../Index.php" class="logo"> Shoe </a>
                </div>
                
                <Nav>
                    <Ul>

                        <!-- List JSON -->
                        <div class="Dropdown-Brand">
                            <Li> <a href="./JsonBrand.php"> List </a> </Li>
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
                            <?php if(isset($_SESSION['username'])) { ?>
                                <li>
                                    <b>
                                        <?php echo $_SESSION['username'];?>
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
        
        <section class="Content_Space" style="font-size: 17px; text-align: center;">
            <br> <b> <div id="Content_Title"> SNEAKER LIST </div> </b> <br>
        
        <div class="display-section">
            <div class="box">
                <?php
                    $stmt = $pdo->prepare("SELECT * FROM item ");
                    $stmt->execute();
                    $row =$stmt->fetch();
                    if ($stmt->rowCount() > 0) {
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {   
                            $jsondata = $row['Item_data'];  
                            $myJSON = json_decode($jsondata);    
                ?>
            
                <b> <div div id="Content"><?= $myJSON->Brand ?></div> </b>
                <div id="Content"><?= $myJSON->Item_name ?></div>
                <div id="Content"><?= $myJSON->Price ?></div><br>
                <?php
                    }
                    }
                ?>
            </div>
        </div>
        </section>

    </div>

</body>

</html>