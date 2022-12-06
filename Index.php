<?php include('connect.php'); ?>

<?php
    session_start();
    if(isset($_GET['logout']))
    {
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

    <title> MAIN </title>

    <script src="https://kit.fontawesome.com/e6f31724cf.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./CSS/Style-Sheet.css">

</head>

<body>

    <div class="Header">
        <div class="Container">

            <!-- Menu Bar -->
            <div class="Menu-Bar">
                <div class="Logo">
                    <a href="./Index.php" class="logo"> Shoe </a>
                </div>

                <script>
                    var xmlHttp;

                    function searchshoe(str) 
                    {
                        if (str.length == 0) {
                            document.getElementById("display").innerHTML = "";
                            document.getElementById("display").style.border = "0px";
                            return;
                        }
                        xmlHttp = new XMLHttpRequest();
                        xmlHttp.onreadystatechange = showshoenameStatus;

                        var shoename = document.getElementById("shoename").value;
                        var url = "searchshoe.php?shoename=" + shoename;
                        console.log(url)
                        xmlHttp.open("GET", url);
                        xmlHttp.send();
                    }

                    function showshoenameStatus()
                    {
                        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                        document.getElementById("display").innerHTML = this.responseText;
                        document.getElementById("display").style.color = "black";
                        }
                    }
                </script>

                <!-- Search --> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <div class="search">
                    <form> 
                        <input class="box-search" id="shoename" name="us_fullname" type="text" placeholder="Search" onkeyup="searchshoe(this.value)">
                        <div id="display"> </div>
                    </form>
                </div>

                <Nav> <Ul>

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
                        <?php if(isset($_SESSION['username'])) { ?>
                            <Li> <a href="../PROJECT/Index.php?logout='1'"> Log Out </a> </Li>
                        <?php } else { ?>
                            <Li> <a href="../PROJECT/Login.php"> Log In </a> </Li>
                        <?php } ?>
                    </div>

                    <!-- Cart -->
                    <div class="Dropdown-Brand">
                        <Li> <a href="./cart.php"> <i class="fa-sharp fa-solid fa-bag-shopping"></i> </a> </Li>
                    </div>

                    <!-- User -->
                    <div class="Dropdown-Brand">
                        <Li> <a href="./user.php"> <i class="fa-solid fa-user"> </i> </a> </Li>
                    </div>

                    <!-- Name -->
                    <div class="Dropdown-Brand">
                        <?php if(isset($_SESSION['username'])) {
                            ?> <li> <b> <?php echo $_SESSION['username'];?> </b> </li>
                        <?php } ?>
                    </div>
                       
                </Ul> </Nav>
                
            </div>

            <!-- Welcome -->
            
            <div class="Subsection">
                <div class="Content-1">
                    <h1> Welcome to the many rare shoe <br> trading sites on this site. </h1>
                    <p> You can find a wide variety of shoes, including limited editions, on this website. </p>
                    
                    <a href="./SNKRS/Brands/JsonBrand.php" class="Button-1"> Explore Now </a>
                </div>

                <div class="Content-1">
                    <img src="../PROJECT/SNKRS/img/Jordan 1 Retro High Off-White Chicago.png">
                </div>
            </div>
            
        </div>
    </div>
    
    <!-- Featured Categories -->

    <div class="Categories">
        <div class="Small-Contain">
            <div class="Subsection">

                <!-- Content-2.1 -->
                <div class="Content-2">
                    <img src="../PROJECT/SNKRS/img/Picture 1.jpg">
                </div>

                <!-- Content-2.2 -->
                <div class="Content-2">
                    <img src="../PROJECT/SNKRS/img/Picture 2.jpg">
                </div>

                <!-- Content-2.3 -->
                <div class="Content-2">
                    <img src="../PROJECT/SNKRS/img/Picture 3.jpg">
                </div>

            </div>
        </div>
    </div>

</body>

</html>