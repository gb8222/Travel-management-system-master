<?php

    require_once 'connect.php';

    if(isset($_GET['id'])){

        $del_ID = $_GET['id']; 

        $sqlupdate = "DELETE FROM `crud` WHERE id = '$del_ID'";
        $con->query($sqlupdate);

    }


?>