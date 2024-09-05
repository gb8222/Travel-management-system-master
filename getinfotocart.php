<?php

    require_once "connect.php";

    /*if(isset($_GET['id']) && $_GET['id'] !== ''){

        $selectedhotelsimgs = $_GET['id'];

        $sql1 = "SELECT * FROM hotel WHERE id = $selectedhotelsimgs";
        $allimages = $con->query($sql1);


    }else*/

    $sql_retrivedata = "SELECT * FROM `crud` ";
    $cartinfo = $con->query($sql_retrivedata);

?>