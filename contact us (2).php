
<!DOCTYPE html>
<html>
<head>
<title>Contact us</title>
<link rel="stylesheet" type="text/css" href="./contact us.css">

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>footer</title>


       <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>header</title>


<style>


	
	 /* Add navigation bar2 */
	 
	ul.navbar2
	{list-style-type: none;
      margin: 0;
      padding: 50;
      overflow: hidden;
      background-color: #FFF;
	  }
	  
	  
	  ul.navbar2 li{
	  float:left;
	  }
	  
	  ul.navbar2 li a{
	   display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
	
	ul.navbar2 li a:hover {
      background-color: #333;
    }
	
	
	ul.dropDown{
	text-align:center;
	width:200px;
	height:100px;
	}
	
	
	
  </style>
</head>
<body>
  

 <?php include "header.php"; ?>  
       

	
	
<h1 style ="text-align:center;font-size:50px">Contact Information</h1>






<p style ="text-align:left;font-size:40px;font-style:italic">Welcome to the our web page!</p>



<br/>
<br/>

<p style="text-align:right;
          font-size:20px;
		  color:black">
		  We would be honored to help you organize the trip of your dreams. 
		  To make sure your journey is seamless and unforgettable, our committed crew is here. Feel free to contact us if you have any questions, recommendations, 
		  or need more information about our services. Below are our contact details, and we promise a swift response. 
		  We appreciate your input and are eager to work with you to plan fantastic vacations. Let us be your reliable travel companion while you discover the world. 
		  Get in touch with us right away to start planning your next journey!</p>
		  
		  <br/>
 <hr>
 
 
 
<br/>	
<br/>
<br/>
<br/>

	
 
 
 
    <ul class="navbar2">
      <li><a href="#">File</a></li>
      <li><a href="#">Edit</a></li>
      <li><a href="#">View</a></li>
      <li><a href="#">Help</a></li>
	  <li><a href="#">Contact us</a></li>
    </ul>
	
	
<br/>	
<br/>
<br/>
<br/>

	
	
	
	
	<form action="contactus.php" method="POST" name="contactForm">
  <input type="text" name="name" placeholder="Your Name" required>
  <input type="email" name="email" placeholder="Your Email" required>
  <input type="text" name="subject" placeholder="Subject" required>
  <textarea name="message" placeholder="Message" required></textarea>
  <input type="submit" value="Submit">
</form>


<br/>	
<br/>
<br/>
<br/>

	
	<h2 style ="text-align:center;font-size:40px">Help</h2>
	<p style ="text-align:center;font-size:30px"> How Can We Help You?</p>
	<p style ="text-align:left;font-size:20px"> We are available to help if you require any support or have queries regarding our services. 
	You may get the information you need to maximize your travel experience from our committed support team at any time.</p>
	
	<h3 style="text-align:center;font-size:40px">Press Contact</h3>
	<p style ="text-align:center;font-size:30px">Live Chat</p>
	<p style ="text-align:center;font-size:20px">Chat with a member of our team.</p>
	
	<div style="text-align: center;">
	<input type="button" style="text-align:center;width:200px;height:30px" value="Start chat"></Br>
	</div>


    <?php include "footer.php"; ?>

<!--footer

     <div class="footer">
        <div class="leftblock">
            <h1>CONTACT US</h1>
           <h3>Email:ABC123@gmail.com</h3>
            <h3>Call :+94xxxxxxxx</h3>
        </div>
        <div class="midblock1">
            <ul>
                <li><a href="">HOW IT WORKS</a></li>
                <li><a href="">SUPPORT</a></li>
                <li><a href="">FAQs</a></li>
                <li><a href="">PRIVACY POLICY</a></li>
                <li><a href="">TERMS OF SERVICE</a></li>
            </ul>
        </div>
        <div class="midblock2">
            <img src="images/texpresscover.png" class="img">
            <h6>Copyright 2023 ALL Rights Reserved</h6>
        </div>
       <div class="midblock3">
            <h1>NEWS LETTER</h1>
            <form>
                <input type="email" placeholder="Your email addres" required>
                <br>
                <button type="submit">SUBSCRIBE NOW</button>
            </form>
        </div>
        <div class="rightblock">
            <img src="images/android.png" class="img1">
            <img src="images/iso.png" class="img1">
        </div>

    </div>
	
  -->
  <script src ="/contact us.js"></script>
</body>
</html>
