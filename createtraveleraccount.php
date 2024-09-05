<?php
session_start();

/*if(isset($_SESSION['user_name'])){
    echo 'Session started...';
   echo $_SESSION['user_name'];
   echo $_SESSION['user_ID'];
}else{
    echo 'Session not started...';
    

}*/
include 'logindatabase.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
       $error[] = 'user already exists';



}else{
    if($pass != $cpass){
        $error[] = 'passwords not matched!';
    }else{
        $insert = "INSERT INTO user_form (name, email, password, user_type) VALUES ('$name', '$email', '$pass', '$user_type')";
        $result = mysqli_query($conn, $insert);
        
            header('location:login.php');
        
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="createtraveleraccount.css">
    <title>Register account</title>
</head>
<body>
   
    <div class="form-container">
   
        <form action="" method="post">
           <h2>Register Now</h2>
           <?php
           if(isset($error)){
               foreach($error as $error){
                   echo '<span class="error_msg">'.$error.'</span>';
               };
           };
           ?>
           <input type="text" name="name" required placeholder="Enter your name"><br><br>
           <input type="email" name="email" required placeholder="Enter your email"><br><br>
           <input type="password" name="password" required placeholder="Enter your password"><br><br>
           <input type="password" name="cpassword" required placeholder="confirm your password"><br><br>
           <select name="user_type" ><br>
                <option value="traveler">Traveler</option>
                <option value="supplier">Supplier</option>
           </select>

              <input type="submit" name="submit" value="register now" class="nextbutton">
              <p>already have an account? <a href="login.php">login now</a></p>
        </form>
    
    </div>
</body>
</html>