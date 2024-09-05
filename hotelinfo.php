<?php

    include_once 'hotelimagesget.php';
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="hotelinfo.css">
    <script>
        function a(){
            console.log('clicked');
        }
    </script>
</head>
<body>
    <!-- include header-->
    <?php require 'header.php' ?>
    <div class="uppercontent">
        <input id='inputdays' class= 'daysinputfield' type="number" min = "1" placeholder="Select number of days" value="1">
        <button id = 'addto' type="submit" class="addtocartbutton" onclick=sendid() value="<?php echo $_GET['id']?>">ADD TO CART</button>
    </div>
    <div class="container">

            <?php
                foreach($allimages as $images){
                    
                    ?>

        <div class="leftcontent">
            <h1 style="color:lightcoral;font-size:50px"><?php echo $images['hotel_name'] ?><br><br></h1>
            <h1><p>Price  LKR  :</p><?php echo $images['price'] ?><br><br></h1>
            <h1><p>Rating      :</p><?php echo $images['rate'] ?> Star<br><br></h1>
            <h1><p>Type  :</p><?php echo $images['type'] ?><br><br></h1>
        </div>
        
        <div class="rightcontent">
            <div class="mid1">
               
                

                
                <div class="leftupbox">
                    <div class="card1">
                        <img src="<?php echo $images['img1'];?>" onclick=a();>
                    </div>
                    
                </div>
                <div class="rightupbox">
                    <div class="card1">
                       <img src="<?php  echo $images['img2'];?>">
                    </div>
                    
                </div>
            </div>    
            <div class="mid2">   
        
                <div class="botleft1">
                    <div class="card">
                       <img src="<?php echo $images['img3'];?>">
                    </div>
                    
                </div>
                <div class="botleft2">
                    <div class="card">
                        <img src="<?php  echo $images['img2'];?>">
                    </div>
                    
                </div>
                <div class="botleft3">
                    <div class="card">
                        <img src="<?php echo $images['img3'];?>">
                    </div>
                    
                </div>
                
            </div>     
        </div>
        <div class="bottomcontent">
            <h1 style="color:lightcoral">DESCRIPTION<br><br></h1>
            <h2><?php echo $images['description'] ?></h2>
        </div>
        
    </div>
    <?php
                }
                ?>
    <script>
        function sendid(){
            let daybutton = document.getElementById('inputdays');
            let days = daybutton.value;
            let button = document.getElementById('addto');
            var pid = button.value;
            var xml = new XMLHttpRequest();
            xml.open("GET","insertdata.php?id="+pid+"&days="+days,true);
            xml.send();
            alert("Item ADDED....ID: "+pid+"days: "+days);

        }
        
    </script>

     <!-- include footer -->
     <?php include_once 'footer.php' ?>

</body>
</html>