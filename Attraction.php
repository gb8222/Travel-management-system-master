
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Attraction.css">
    <link rel="stylesheet" href="header/header.css">
    <title>Attraction</title>
</head>
<body>
<?php
        include 'header.php';
    ?>
     <p id="networkStatus"></p>
    <div class="header">
    <h1>Attractions</h1>
        <!--
        <from>
            
            <div class="form-box">
            <select class="jhk" name="vType" id="vType">
						<option>Select Province</option>
						<option value="1">Central</option>
						<option value="2">North Central</option>
						<option value="3">Northern</option>
						<option value="4">Eastern</option>
						<option value="5">North Western</option>
						<option value="6">Southern</option>
						<option value="7">Uva</option>
						<option value="8">Sabaragamuwa</option>
                        <option value="8">Western</option>
						
					</select>
                <input type="text" class="search-field dates" placeholder="Select your dates">
                <button class="search-btn"
                type="submit">Search</button>


            </div>
        </from>-->

    </div>
    <div class="maindiv">
    </div>
    <div class="container">
        <div class="test">
            <div class="content">
                <p>Sigiriya is an ancient rock fortress in Sri Lanka, known as the Lion Rock. Built in the 5th century AD, it was a royal palace complex and later a Buddhist monastery. With frescoes, gardens, and water features, it showcases advanced engineering. It's a UNESCO World Heritage site and popular tourist destination. </p>
                <img src="A11.jpg" alt="">
                <h3> Sigiriya</h3>
            </div>
        </div>
        <div class="test">
            <div class="content">
                <p>Dambulla is a town located in the Matale District of Sri Lanka. It is famous for its UNESCO World Heritage site, Dambulla Cave Temple. The temple complex features five caves adorned with ancient Buddhist murals and over 150 statues of Buddha. It is a significant pilgrimage site and a cultural treasure of Sri Lanka.</p>
                <img src="A9.jpg" alt="">
                <h3> Dabulla</h3>
            </div>
        </div>
        <div class="test">
            <div class="content">
                <p> Yala National Park is a renowned wildlife sanctuary located in the southeastern part of Sri Lanka. It is the country's most visited national park, known for its diverse ecosystems and abundant wildlife, including elephants, leopards, and various bird species. Yala offers thrilling safari experiences and a chance to immerse oneself in the natural beauty of Sri Lanka.</p>
                <img src="A2.jpg" alt="">
                <h3> Yala</h3>
            </div>
        </div>
        <div class="test">
            <div class="content">
                <p> Nuwara Eliya is a picturesque town nestled in the central highlands of Sri Lanka. Known as "Little England," it exhibits a unique blend of colonial charm and lush natural beauty. The town is famous for its cool climate, tea plantations, scenic landscapes, and colonial-era architecture, making it a popular destination for both locals and tourists. </p>
                <img src="A6.jpg" alt="">
                <h3> Nuwara Eliya</h3>
    </div>
    
    <script >    window.addEventListener('DOMContentLoaded', (event) => {
            const searchBtn = document.querySelector('.search-btn');
            const whereInput = document.querySelector('.search-field.where');
            const datesInput = document.querySelector('.search-field.dates');

            searchBtn.addEventListener('click', function(event) {
                event.preventDefault();
                const whereValue = whereInput.value;
                const datesValue = datesInput.value;
                console.log("Where: " + whereValue);
                console.log("Dates: " + datesValue);
                
            });
        });
    </script>
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

      

</body>
</html>