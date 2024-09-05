<?php
    require_once "connect.php";

    //update
    if(isset($_POST['email'])){
        $upmail = $_POST['email'];
        $idv = $_POST['getid'];
        $sqlup = "UPDATE `payment` SET `email` ='$upmail' where id = '$idv'  ";
        mysqli_query($con,$sqlup); 

    }
    //retrive
    $sqlre = "SELECT * FROM `payment`";
    $res = mysqli_query($con,$sqlre);



   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="view payment.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.php" ?>;
    <div class = "div1">
        <div class="div6">
            <?php foreach($res as $email)
            {?>
            <div class="div2">
                <h3>Name</h3>
                <h3>Email</h3>
                <h3>Amount</h3>
            </div>
            <div class="div5">
                <div class="div3">
                    <h3><?php echo $email['name'] ?></h3>
                    <form action="#" method="POST">
                    <input type = "email" name = "email" value="<?php echo $email['email'] ?>">
                    <div class="div4">
                    <lable>Update</lable>
                    <input type = 'submit' name = "getid" id= "up<?php echo $email['id'] ?>" value="<?php echo $email['id'] ?>">

                </div>
                    </form>
                    <h3><?php echo $email['amount'] ?></h3>
               
                </div>
               
            </div>
            <?php
            }
            ?>
        </div>
        
        
        
        
        
    </div>
    <?php include "footer.php" ?>
</body>
</html>