<?php

include '123newcon.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $status=$_POST['status'];
    $email=$_POST['email'];
    $sql="INSERT INTO `crud` (Fullname, Contact, Status, Email) VALUES ('$name', '$contact', '$status', '$email')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
        
    }else{
       die(mysqli_error($con));
    
    }
}

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="header/header.css">
<link rel="stylesheet" href="footer/footer.css">
    <title>Feedback</title>
</head>
<body>

<?php
        include 'header.php';
    ?>
    
    <div class="container my-5">
    <form method="post">
    <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
    </div>
    <div class="form-group">
    <label >Contact</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="contact" autocomplete="off">
    </div>
    <div class="form-group">
    <label >Status</label>
    <input type="text" class="form-control" placeholder="Enter your Status" name="status" autocomplete="off">
    </div>
    <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
    </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
    <?php
        include 'footer.php';
    ?>
    
    
</body>
</html>