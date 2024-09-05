
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Availability</title>
    <link rel="stylesheet" href="Availability.css">
    <link rel="stylesheet" href="header/header.css">
    <link rel="stylesheet" href="footer/footernew1.css">
</head>
<body>
<?php
        include 'header.php';
		require_once "connect.php";
		$sql = "SELECT * FROM hotel_details where id BETWEEN 1 AND 8";
		$all_hotels = $con->query($sql);
    ?>
    <p id="networkStatus"></p>
    <h1>Availability</h1>
   
    <h3>Now Availabal hotels </h3>
    
    <marquee behavior="alternate">
		<?php foreach($all_hotels as $hotels){
			
			?>

       
        <a href="hotelinfo.php?id=<?php echo $hotels['id']?>"><img src="<?php echo $hotels['img1'] ?>" width="800px" height="300" alt=""></a>
        

		<?php
		
				}		
			?>
    </marquee>

    <div class="left_box">
					<select class="jhk" name="vType" id="vType">
						<option>Select hotel number</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						
					</select>
				</div>

               

				<!--Popup Message-->
				
				<div class="popup" id="popup-1">
					<div class="overlay"></div>
						<div class="content">
							<div class="close-btn" onclick="togglePopup()">&times;</div>


                           
							<h3>Hotels</h3>
                            <div class="Hol">
							
								<table>
									<tr>
										<th class="fiy">Hotel name</th>
										<th>Number</th>
										<th class="fi">Where</th>
									</tr>

									<tr>
										<td class="fiy">hotel1</td>
										<td>1</td>
										<td class="fi">Where1</td>
										
									</tr>

									<tr>
                                        <td class="fiy">hotel2</td>
										<td>2</td>
										<td class="fi">Where2</td>
									</tr>

									<tr>
                                        <td class="fiy">hotel3</td>
										<td>3</td>
										<td class="fi">Where3</td>
									</tr>

									<tr>
                                        <td class="fiy">hotel4</td>
										<td>4</td>
										<td class="fi">Where4</td>
									</tr>

									<tr>
                                        <td class="fiy">hotel5</td>
										<td>5</td>
										<td class="fi">Where5</td>
									</tr>

									<tr>
                                        <td class="fiy">hotel6</td>
										<td>6</td>
										<td class="fi">Where6</td>
									</tr>

									<tr>
									    <td class="fiy">hotel7</td>
										<td>7</td>
										<td class="fi">Where7</td>
									</tr>

									<tr>
                                        <td class="fiy">hotel8</td>
										<td>8</td>
										<td class="fi">Where8</td>
									</tr>

									

					
								</table>
							</div>

						</div>

					<button class="hint" onclick="togglePopup()"><b>i</b></button>

				</div>
                <a id="link" href="hotelinfo.php?id=" ><button  class="sub" type="submit" onclick=readval()>Submit</button>
   
   
  
  
   <script> 
 const networkStatusElement = document.getElementById('networkStatus');
 window.addEventListener('load', checkNetworkStatus);
 window.addEventListener('online', checkNetworkStatus);
        window.addEventListener('offline', checkNetworkStatus);

        function checkNetworkStatus() {
            if (navigator.onLine) {
                networkStatusElement.textContent = 'You are online.';
            } else {
                networkStatusElement.textContent = 'You are offline.';
            }
        }
</script>
<script>
    function togglePopup(){
	document.getElementById("popup-1").classList.toggle("active");
}
</script>
<script>
	function readval(){
		let a = document.getElementById('vType').value;
		console.log(a);
		
	}
</script>


    </div>
   
</body>
</html>