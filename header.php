<?php
    session_start();

    if(isset($_SESSION['user_name'])){
        echo 'Session started...';
       echo $_SESSION['user_name'];
       echo $_SESSION['user_ID'];
    }else{
        echo 'Session not started...';
        
    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <title>header</title>
</head>
<body>
    <!--header-->
    <div class="main_wrapper">
        <div class="center_wrapper">
            <div class="left_wrapper">
                <div class="logo">
                    <a href=""><img src="header logo.png"></a>
                </div>
                <div class="text">
                    
                    TEXPRESS
                </div>
            </div>
            <div class="middle_wrapper">
                <nav>
                    <ul>
                        <li><a href="home.php">HOME</a></li>
                        <li><a href="Accomodation.php">ACCOMMODATION</a></li>
                        
                        <li><a href="Attraction.php">ATTRACTION</a></li>
                        <li><a href="Availability.php">AVAILABILITY</a></li>
                        <li><a href="contact us (2).php">CONTACT US</a></li>
                        <li><a href="AboutUs.php">ABOUT US</a></li>
                    </ul>
                </nav>
            </div>
            <div class="right_wrapper">
                <div class="profile_logo">
                    <a href="cards.php"><img src="header profile.png" class="pro_logo"></a>
                </div>
                <div class="buttons">
                    <a href="display.php"><button class="button_cart">Feedback</button></a>
                    <a href="login.php"><button class="button_cart">Log in</button></a>
                    <a href="createtraveleraccount.php"><button class="button_cart">Register</button></a>
                    <a href="cart.php"><button class="button_cart">Cart</button></a>
                    <a href="logout.php"><button class="button_cart">logout</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>