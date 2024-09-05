<?php
    require_once "connect.php";

    if(isset($_POST['name'])){

    
    //capture form details
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $amount = $_POST['amount'];

    //sql query
    $insertsql = "INSERT INTO `payment` (`name`,`email`,`address`,`amount`) values('$name','$mail','$address','$amount')";
    //send sql query to data base through connection
    mysqli_query($con,$insertsql);
    }


?>
<!DOCTYPE html>
<html Long="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Comatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="payment.css">

</head>

<body>

	<!-- include header-->
	<?php include "header.php" ?>
	
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form id = 'details' action="#" method="POST">
            <!--Account Information Start-->
            <h4>Account</h4>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Full Name" required class="name" name='name'>
                    
                </div>
                <div class="input_box">
                    <input type="text" placeholder="Name On Card" required class="name" name='card'>
                    
                </div>
            </div>

            <div class="input_group">
                <div class="input_box">
                    <input type="email" placeholder="Email Address" required class="name" name='mail'>
                    
                </div>
            </div>

            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Address" required class="name" name='address'>
                    
                </div>
            </div>

            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="City" required class="name">
                    
                </div>
            </div>
            <!--Account Information End-->

            <!--Payment Details Starts-->

            <div class="input_group">
                <div class="input_box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" >
                    <label>Credit Card</label> 
                    <input type="radio" name="pay" >
                    <lable>Paypal</lable>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="tel" class="name" placeholder="Card Number 1111-2222-3333-4444" required>
                    
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="tel" class="name" placeholder="Card CVC 632" required>
                    
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="number" class="name" placeholder="Exp Month" required>
                    
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="number" class="name" placeholder="Exp Year" required>
                    
                </div>
            </div>
                <div class="input_box">
                    <input type="number" class="name" placeholder="Enter Amount" required name='amount'>
                    
                </div>
            <div class="input_group">
                <div class="input_box">
                    <button id='submitbut' type="submit" value="submit"  >Pay Now</button>
                </div>
            </div>

            <!--Payment Details Starts-->
        </form>
    </div>
    <div>
        <a style="display: flex; justify-content:center;margin-top:5px;" href="view payment.php"><button>View Payment</button></a>
    </div>
	<!-- include footer-->

	<?php include "footer.php" ?>
    
</body>
</html>