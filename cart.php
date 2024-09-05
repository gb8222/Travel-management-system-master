
<?php

    include_once 'getinfotocart.php';
    $total_price = 0;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <title>Cart</title>
</head>
<body>
    <!-- include header-->
    <?php require 'header.php' ?>

    <?php
        if(mysqli_num_rows($cartinfo) > 0 ){
            foreach($cartinfo as $cartdata){
                $total_price += ($cartdata['price'] * $cartdata['days']);
                        
        ?>
    <div class="card">

        <div class="left">
            <img src="<?php echo $cartdata['img'] ?>" alt="Hotel image">
        </div>
       
        <div class="right">
            
            <div class="content">
                <h1>Hotel Name: <?php echo $cartdata['name'] ?></h1>
                <h1 id=price>Hotel Price: <?php echo $cartdata['price'] ?></h1>
                <h1>Days: <?php echo $cartdata['days'] ?><br><h2 style="color:red">Change days :</h2></h1>
                <input id = 'dayselecter<?php echo $cartdata['id'] ?>' class='dayschanger' type='number' placeholder="Change days" min = '1' value ='<?php echo $cartdata['days'] ?>'>
                <div class="butns">
                    <button id = 'up<?php echo $cartdata['id'] ?>'class="bu" value =<?php echo $cartdata['id'] ?> onclick= sendidupdate(this.value)>UPDATE</button>
                    <button id='del<?php echo $cartdata['id'] ?>' class ="bd" value =<?php echo $cartdata['id'] ?> onclick=sendiddelete(this.value)>DELETE</button>
                </div>
                
            </div>
            

        </div>

    </div>
    <?php
            }
        }else{

            ?><h1 style="display:flex;align-items:center;justify-content:center">NOTHIN IN CART</h1><?php
        }
            ?>
    <div class="buttoncontainer">
        <div class="text">
            <h2>Total price</h2>
            <h2>LKR: <?php echo $total_price; ?></h2>
        </div>
        <div class="button">
            <a href="payment.php"><button> Checkout</button></a>
        </div>
        
        
    </div>
    <script>
        function sendidupdate(value){
            
            
            var pid = value;
            let daybutton = document.getElementById('dayselecter'+pid);
            let days = daybutton.value;

            var xml1 = new XMLHttpRequest();
            xml1.open("GET","update.php?id="+pid+"&days="+days,true);
            xml1.send();
            
            //alert("Item UPDATED....ID: "+pid+"days: "+days);
            location.reload();

        }

        function sendiddelete(value){
            
            
            var pid = value;
            let daybutton = document.getElementById('dayselecter'+pid);
            let days = daybutton.value;

            var xml1 = new XMLHttpRequest();
            xml1.open("GET","delete.php?id="+pid);
            xml1.send();
            
            //alert("Item UPDATED....ID: "+pid+"days: "+days);
            location.reload();

        }
        
    </script>

    <!-- include footer -->
     <?php include_once 'footer.php' ?>


</body>

    

</html>