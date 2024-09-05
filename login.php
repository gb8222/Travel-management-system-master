<?php
include 'logindatabase.php';
session_start();


if(isset($_POST['submit'])){
    //$name =$_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    //$cpass = $_POST['cpassword'];
    //$user_type = $_POST['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
    $result = $conn->query($select);

    if(mysqli_num_rows($result) > 0){
       $row = mysqli_fetch_array($result);

       $_SESSION['user_name'] = $row['name'];
       $_SESSION['user_ID'] = $row['userid'];
       header('location:home.php');

       //$_SESSION['user_ID'] = $row['id'];


       /*if($row['user_type'] == 'traveler'){
        $_SESSION['traveler_name'] = $row['name'];
        $_SESSION['traveler_ID'] = $row['id'];
        header('location:home.php');
         }elseif($row['user_type'] == 'supplier'){
            $_SESSION['supplier_name'] = $row['name'];
            $_SESSION['supplier_ID'] = $row['id'];
            header('location:home.php');
         }*/
    }else{
    $error[] = 'incorrect email or password!';
    }
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="UTF -8">
    <meta name ="viewport" content = "width =device -width, initial -scale =1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="logingpg.css">
</head>
<body>
    <section>
        <div class = "form-container">
            <h1>login Now</h1>
            <form action = "" method="post" >
            <?php
           if(isset($error)){
               foreach($error as $error){
                   echo '<span class="error_msg">'.$error.'</span>';
               };
           };
           ?>  
           <input type="email" name="email" required placeholder="enter your email">
           <input type="password" name="password" required placeholder="enter your password">
           <input type="submit" name="submit" value="login now" class="form-btn">
           <p>don't have an account? <a href="createtraveleraccount.php">register now</a></p>
              <!--  <div class ="control">
                    <lable for ="name">Username/Email  </lable>
                    <input type ="text" name="name" id="name">
                </div>
                <div class="control">
                    <label for ="psw">Passsword</label>
                    <input type = "password" name="psw" id="psw">
                </div>
                <span><input type="checkbox">Remember me.</span>
                <div class="control">
                    <input type="submit" value="Login">
                </div>
            </form>
            <div class="link">
                <a href="#">Forgot Password ?</a>
            </div>!-->

    </section>  
</body>
</html>