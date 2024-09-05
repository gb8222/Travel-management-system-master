<?php

    require_once 'connect.php';
   
    
    if(isset($_GET['id']) && isset($_GET['days'])){

        $H_daysup = $_GET['days'];
        $Hotel_IDup = $_GET['id'];
    

        
        $sqlupdate = "UPDATE `crud` SET `days`='$H_daysup' WHERE id='$Hotel_IDup'";
        $con->query($sqlupdate);

    }
        


    
        /*$sqladd = "INSERT INTO `crud`(`id`, `price`, `days`, `name`, `img`) VALUES ('$Hotel_ID','$H_price','hj',$H_name,$H_img)";
        $con->query($sqladd);*/


    



    //$sqladd = "INSERT INTO `crud`(`id`, `price`, `days`, `name`, `img`) VALUES ('$_GET[id]','12','5','a','kl')";
    //$con->query($sqladd);
?>