<?php
include 'contact us (2).php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="header/header.css">
<link rel="stylesheet" href="footer/footer.css">

</head>
<body>
<?php
        include 'header.php';
    ?>
    
    <div class="container">
	<h2>list of clients<h2>
	<a class="btn btn-primary" href="/contactus/contact us (2).php" role="button"> New client </a>
	
	</br>
	<table class ="table">
	<thead>
	<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Subject</th>
	<th>Message</th>
	
	</tr>
	</thead>
	
	<tbody>
	
	<?php 
	   
	   $servername = "localhost";
	   $username = "root";
	   $password = "";
	   $dbname = "contactus";
	   
	   
	   
	   // create connection
	   
	   $connection = new mysqli($localhost,$root,$password,$contactus);
	   
	   //check connection
	   
	   if($connection->connect_error)
	   {
		   die ("connecction failed:"$connection->connect_error);
	   }
	   
	   //read all rows in data base table
	   
	   $sql = "select * from cs_table";
	   $result = $connection->query($sql);
	   
	   if(!$result)
	   {
		   die("invalid query:".$connection->error);
	   }
	   
	   
	   //read data from each row
	   
	   while($row = $result -> fetch_acoss())
	   {
		   echo "
		   <tr>
	    <td>$row[name]</td>
	   <td>$row[email]</td>
		<td>$row[subject]</td>
		<td>$row[message]</td>
		<td>
		<a class = 'btn btn-primary btn-sm' href='/contacus/edit.php?$row[name]'>Edit</a>
		<a class = 'btn btn-danger btn-sm' href='/contactus/delete.php?$row[name]'>Delete</a>
		
		
	</tr>
	";
		   
	   }
	   
	   
	   ?>
	
	
	
	
	
	</tbody>
	
	
	</table>
	
	</div>
	
	
	<body>
	</html>
	
	