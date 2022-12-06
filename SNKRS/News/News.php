<?php include('../../connect.php'); ?>

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

    <title> NEWS </title>

    <script src="https://kit.fontawesome.com/e6f31724cf.js" crossorigin="anonymous"> </script>

    <!-- Dom 1 -->
    <script>
        function myFunction() {
            var x = document.getElementById("myNew");
            x.querySelector(".name").innerHTML = "Jordan 1 Retro High Off-White Chicago";
        }
    </script>

    <!-- Dom 2 -->
    <script>
        function over() {
            var titleObject = document.getElementById("new");
            titleObject.style.fontSize = "30px";
        }
        function out() {
            var titleObject = document.getElementById("new");
            titleObject.style.fontSize = "20px";
        }   
    </script>
    
    <link rel="stylesheet" href="../../CSS/Style-News.css">

    <style>
        
    .show {
        background-color: antiquewhite;
        border-radius: 8px;
        color: black;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
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
                    <a href="../../Index.php" class="logo"> Shoe </a>
                </div>
                
                <Nav>
                    <Ul>

                        <!-- List JSON -->
                        <div class="Dropdown-Brand">
                            <Li> <a href="../Brands/JsonBrand.php"> List </a> </Li>
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
                            <Li> <a href="./News.php"> News </a> </Li>
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

            <div class="News">
                <br> <h2> NEWS </h2> <br>
                
                <!-- Dom 1-->
                <div id="myNew">
                    <b class="name" style="font-size: 20px;"> Product </b> : 
                    <button class="show" onclick="myFunction()"> Show Name </button>
                </div>

                <div class="Contain">
                    <div class="Left">
                        <img src="../img/Jordan 1 Retro High Off-White Chicago.png" width ="600" height ="400">
                    </div>
                    
                    <!-- Dom 2 -->
                    <div class="Right" id="new" onmouseover="over()" onmouseout="out()"> <br><br><br><br><br><br>
                        <p> Virgil Abloh เจ้าของแบรนด์ Off-White ร่วมมือกับ Nike ปล่อยคอลเลกชั่น
                            The Ten และ 1 ในไฮไลท์ที่น่าสนใจจากคอลเลกชั่นนี้คือ Air Jordan 1 มาในสีของทีม Chicago Bulls
                            ที่เป็นการผสมกันระหว่างสีขาว ดำและแดงโดยตัวรองเท้านั้นเป็นสีขาว ส่วนที่ Exclusive คือบริเวณด้านข้างของรองเท้า
                            มีคำว่า Off-White for NIKE สัญลักษณ์ Nike Swoosh งานนี้มาในสีดำที่เป็นงาน hand-cut และใช้วัสดุใหม่ของ Off-White
                            เท่านั้นยังไม่พอยังมีโลโก้ AIR ที่บริเวณพื้นรองเท้าด้านข้าง จุดเด่นอื่นๆ คือการนำตัวเลข 85 ซึ่งมีที่มาจากค.ศ.1985 มาไว้ที่บริเวณข้อเท้า
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div> 

</body>

</html>