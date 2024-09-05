<?php

    require_once 'connect.php';
   
    
    if(isset($_GET['id']) && isset($_GET['days'])){

        $Hotel_ID = $_GET['id'];
        $H_days   = $_GET['days'];
        $sqlretrive = "SELECT * FROM hotel_details WHERE id ='$Hotel_ID'";
        $hotel_details = $con->query($sqlretrive);
        $row = $hotel_details->fetch_assoc();
        $H_price = $row['price'];
        $H_name  = $row['hotel_name'];
        $H_img   = $row['img1'];
    

        
        $sqladd = "INSERT INTO `crud`(`id`, `price`, `days`, `name`, `img`) VALUES ('$Hotel_ID','$H_price','$H_days','$H_name','$H_img')";
        $con->query($sqladd);

    }
        


    
        /*$sqladd = "INSERT INTO `crud`(`id`, `price`, `days`, `name`, `img`) VALUES ('$Hotel_ID','$H_price','hj',$H_name,$H_img)";
        $con->query($sqladd);*/


    



    //$sqladd = "INSERT INTO `crud`(`id`, `price`, `days`, `name`, `img`) VALUES ('$_GET[id]','12','5','a','kl')";
    //$con->query($sqladd);
?>