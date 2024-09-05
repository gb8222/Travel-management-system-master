<?php


require_once "connect.php";


if(isset($_GET['q1ans']) && isset($_GET['q2ans']) && isset($_GET['q3ans'])){

    ?>
    <script>
        console.log('budget and rating and type run');
    </script>
<?php

        $selectedprice = $_GET['q1ans'];
        list($minprice, $maxprice) = explode('-', $selectedprice);
        $minprice = intval($minprice); // Convert to integer
        $maxprice = intval($maxprice); // Convert to integer

        $selectedrate = $_GET['q2ans'];
        $rate = intval($selectedrate);

        $selectedtype = $_GET['q3ans'];

        $sql = "SELECT * FROM hotel_details WHERE price BETWEEN  $minprice AND $maxprice AND rate = $selectedrate AND type = '$selectedtype'";

}elseif(isset($_GET['q1ans']) or isset($_GET['q2ans']) or isset($_GET['q3ans'])){


        if(isset($_GET['q1ans'])){

            $selectedprice = $_GET['q1ans'];
            list($minprice, $maxprice) = explode('-', $selectedprice);
            $minprice = intval($minprice); // Convert to integer
            $maxprice = intval($maxprice); // Convert to integer

            if(isset($_GET['q2ans'])){

                $selectedrate = $_GET['q2ans'];
                
                $sql = "SELECT * FROM hotel_details WHERE price BETWEEN  $minprice AND $maxprice AND rate = $selectedrate";

                ?>
                    <script>
                        console.log('budget and rate run');
                    </script>
                <?php

            }elseif(isset($_GET['q3ans'])){
                
                $selectedtype = $_GET['q3ans'];

                $sql = "SELECT * FROM hotel_details WHERE price BETWEEN  $minprice AND $maxprice AND type = '$selectedtype'";

                ?>
                    <script>
                        console.log('budget and type run');
                    </script>
                <?php

            }else{

                $sql = "SELECT * FROM hotel_details WHERE price BETWEEN  $minprice AND $maxprice";

                ?>
                    <script>
                        console.log('budget run');
                    </script>
                <?php

            }

            
        

        }elseif(isset($_GET['q2ans'])){

            $selectedrate = $_GET['q2ans'];
            $rate = intval($selectedrate);


            if(isset($_GET['q3ans'])){

                $selectedtype = $_GET['q3ans'];

                $sql = "SELECT * FROM hotel_details WHERE rate = $selectedrate AND type = '$selectedtype'";

                ?>
                    <script>
                        console.log('rate and type run');
                    </script>
                <?php

            }else{

                $sql = "SELECT * FROM hotel_details WHERE rate = $selectedrate";

                ?>
                    <script>
                        console.log('rate run');
                    </script>
                <?php

            }
        

        }else{

            $selectedtype = $_GET['q3ans'];
            $sql = "SELECT * FROM hotel_details WHERE type = '$selectedtype'";
            

            ?>
            <script>
                console.log('type run');
            </script>
            <?php

            }
        


        }else{

    $sql = "SELECT * FROM hotel_details";

}



$all_hotels = $con->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="accommodation.css">
    
</head>

<body>
    <!--header-->
    <?php require 'header.php' ?>
    <!--where check guests section-->
    <div class="section3full">
        <div class="a">
            <input type="text" placeholder="Where to?">
        </div>
        <div class="b">
            <p>Check in</p>
            <input type="date">
        </div>
        <div class="c">
            <p>Check out</p>
            <input type="date">
        </div>
        <div class="d">
            <select class="guest">
                <option value="null">Guests</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="1">3</option>
                <option value="2">4</option>
                <option value="1">5</option>
                <option value="2">6</option>
                <option value="1">7</option>
                <option value="2">8</option>
            </select>
        </div>
        <div class="e">
            <a href=""><button class="submitbutton">Submit</button></a>
        </div>
    </div>
    <!--middle section-->
    <div class="middleblock">
        <div class="leftblock">
            <form method="GET">
                <div class="q1">
                    <h3>Budget</h3>
                    <input type="radio" id="budget1" name="q1ans" value="0 - 20000" >
                    <label>LKR 0 - 20 000</label><br>
                    <input type="radio" id="budget2" name="q1ans" value="20000 - 60000" >
                    <label>LKR 20 000 - 60 000</label><br>
                    <input type="radio" id="budget3" name="q1ans" value="60000 - 100000" >
                    <label>LKR 60 000 - 100 000</label><br>
                    <input type="radio" id="budget4" name="q1ans" value="100000 - 1000000" >
                    <label>Above 100 000</label><br><br>

                </div>
                <div class="q2">
                    <h3>Rating</h3>
                    <input type="radio" id="rate1" name="q2ans" value="1">
                    <label>1 star</label><br>
                    <input type="radio" id="rate2" name="q2ans" value="2">
                    <label>2 star</label><br>
                    <input type="radio" id="rate3" name="q2ans" value="3">
                    <label>3 star</label><br>
                    <input type="radio" id="rate4" name="q2ans" value="4">
                    <label>4 star</label><br>
                    <input type="radio" id="rate5" name="q2ans" value="5">
                    <label>5 star</label><br><br>

                </div>
                <div class="q3">
                    <h3>Type</h3>
                    <input type="radio" id="type1" name="q3ans" value="House">
                    <label>House</label><br>
                    <input type="radio" id="type2" name="q3ans" value="Apartment">
                    <label>Apartments</label><br>
                    <input type="radio" id="type3" name="q3ans" value="Hotels">
                    <label>Hotels</label><br><br>

                </div>
                <div class="searchbutton">
                    <input type="submit" class="searchbutton1" value="search">
                </div>
            </form>
            
        </div>
        <!--rigth block-->
        <div class="rightblock">
            <?php

            if(mysqli_num_rows($all_hotels) > 0){

                foreach($all_hotels as $hotelinfo){

                    ?>
                    <div class="list">
                    <div class="box">
                        <a href="hotelinfo.php?id=<?php echo $hotelinfo['id']?>"><img src="<?php echo $hotelinfo["img1"]; ?>" alt="london"></a>
                        <div class="content">
                            <h3><i class="fas fa-map-marker-alt"></i><?php echo $hotelinfo["hotel_name"]; ?></h3>
                            <p>One night :LKR<?php echo $hotelinfo["price"]; ?><br>Rating   :<?php echo $hotelinfo["rate"]; ?> Starts</p>
                            <div class="stars">
                            </div>
                        </div>
                    </div>
                </div>
                <?php

                }
            }else{

                ?>
                    <h1><br><br><br>No Results Found</h1>
                <?php
            }
            
            ?>
                
        
        </div>
    </div>
    <!-- include footer -->
        <?php include_once 'footer.php' ?>
</body>

</html>