<?php

    require_once "connect.php";
    $selectedhotelsimgs = $_GET['id'];

    $sql1 = "SELECT * FROM hotel_details WHERE id = $selectedhotelsimgs";
    $allimages = $con->query($sql1);
    

    
?>