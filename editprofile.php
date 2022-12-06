<?php include('connect.php'); ?>

<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: Index.php');
}

if (!($_SESSION['username'])) {
    header('location: Index.php');
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> EDIT PROFILE </title>

    <script src="https://kit.fontawesome.com/e6f31724cf.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./CSS/Style-User.css">

</head>

<body>

    <?php
    if (isset($_SESSION['user_id'])) {
        $ID_User = $_SESSION['user_id'];
        $stmt = $pdo->prepare("SELECT * FROM user WHERE ID_User = $ID_User");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    ?>

    <div class="Header">

        <div class="Profile">
            <div class="Container">

                <!-- Menu Bar -->
                <div class="Menu-Bar">
                    <div class="Logo">
                        <a href="./Index.php" class="logo"> Shoe </a>
                    </div>

                    <Nav>
                        <Ul>

                            <!-- List JSON -->
                            <div class="Dropdown-Brand"> 
                                <Li> <a href="./SNKRS/Brands/JsonBrand.php"> List </a> </Li>
                            </div>

                            <!-- Brands -->
                            <div class="Dropdown-Brand">
                                <Li> <a href="#"> Brands </a> </Li>
                                <div class="Brand-Content">
                                    <a href="../PROJECT/SNKRS/Brands/Nike/Nike.php"> Nike </a>
                                    <a href="../PROJECT/SNKRS/Brands/Adidas/Adidas.php"> Adidas </a>
                                </div>
                            </div>

                            <!-- News -->
                            <div class="Dropdown-Brand">
                                <Li> <a href="../PROJECT/SNKRS/News/News.php"> News </a> </Li>
                            </div>

                            <!-- Log In & Log Out -->
                            <div class="Dropdown-Brand">
                                <?php if (isset($_SESSION['username'])) { ?>
                                    <Li> <a href="../PROJECT/Index.php?logout='1'"> Log Out </a> </Li>
                                <?php } else { ?>
                                <?php } ?>
                            </div>
                            
                            <!-- Cart -->
                            <div class="Dropdown-Brand">
                                <Li> <a href="./cart.php"> <i class="fa-sharp fa-solid fa-bag-shopping"></i> </a> </Li>
                            </div>

                            <!-- User -->
                            <div class="Dropdown-Brand">
                                <Li> <a href="../PROJECT/user.php"> <i class="fa-solid fa-user"> </i> </a> </Li>
                            </div>

                            <!-- Name -->
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

            </div> <hr>
        </div>

        <div class="Layout">
            <section>
                <div class="Profile-Component">
                    <?php
                    $us = $pdo->prepare("SELECT * FROM user WHERE ID_User = $ID_User");
                    $us->execute();
                    if ($us->rowCount() > 0) {
                            while ($row = $us->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <div action="" method="post" class="profilebox"> <br>
                        <div class="#">
                            <b> Account : </b> <b> <?php echo $row['Username']; ?> </b>
                            </div>
                            <div class="Code">
                                <p> Member ID : ( <?php echo $row['ID_User']; ?> ) </p>
                            </div> <br>
                    </div>

                    <ul class="nav nav-tabs">
                        <b> Menu : </b>
                        <li class="nav-item">
                            <a class="nav-link active button" aria-current="page" href="./user.php"> Personal Information </a> |
                            <a class="nav-link button" href="./history.php"> Order History </a>
                        </li>
                    </ul> <br>

                    <form action="./editprofiledb.php" method="post"> <br>

                        <b> Edit Account </b> <br><br>

                        <div class="row">
                            <div class="col-md-6">
                                <label> Name : </label>
                                <input class="box-input" name="us_fullname" type="text" value="<?= $row["Fullname"] ?>">
                            </div> <br>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label> Password : </label>
                                <input class="box-input" name="us_password" type="text" value="<?= $row["Password"] ?>">
                            </div>
                        </div> <br>

                        <div class="row">
                            <div class="col-md-6">
                                <label> Mobile : </label>
                                <input class="box-input" name="us_tel" type="text" value="<?= $row["Tel"] ?>">
                            </div> <br>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label> Email : </label>
                                <input class="box-input" name="us_email" type="text" value="<?= $row["email"] ?>">
                            </div> <br>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="button" id="record" name="confirm"> Save Data </button> <br>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
                    };
                    };
                ?>
            </section>
        </div>

    </div>

</body>

</html>