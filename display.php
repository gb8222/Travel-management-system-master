<?php
include '123newcon.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crudop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="header/header.css">
<link rel="stylesheet" href="footer/footer.css">

</head>
<body>
<?php
        include 'header.php';
    ?>
    
    <div class="container">
        <button class="btn btn-primary my-5"><a href="fdb.php
        " class="text-light">Feedback</a></button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Fullname</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
           <?php
           $sql="SELECT * FROM `crud`";
           $result=mysqli_query($con,$sql);
           if($result){
          
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['Fullname'];
                $contact=$row['Contact'];
                $status=$row['Status'];
                $email=$row['Email'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$contact.'</td>
                <td>'.$status.'</td>
                <td>'.$email.'</td>
               
                <td>
            <button class="btn btn-primary"> <a href="updateF.php?updateid='.$id.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"> <a href="deleteF.php?deleteid='.$id.'" class="text-light">Delete</a></button>
           </td>
           </tr>';



            }
           }
           ?> 
           
        </tbody>
    </table>
    <?php
        include 'footer.php';
    ?>
    
</body>
</html>