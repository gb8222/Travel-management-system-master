<?php

    $serverName = "localhost";
    $userName   = "root";
    $password   = "";
    $dbName     = "test";

    //create connection

    $con = mysqli_connect($serverName,$userName,$password,$dbName);

    if(mysqli_connect_errno()){

         echo "Faild to connect";
         exit();
         
    }else{

        ?> <script>console.log("DB Connected")</script> <?php
        
    }

?>