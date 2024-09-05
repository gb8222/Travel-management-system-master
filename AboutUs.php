<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="AboutUs.css">
    <link rel="stylesheet" href="header/header.css">
    <link rel="stylesheet" href="footer/footer.css">
</head>
<body >
    

     <?php
        include 'header.php';
    ?>
 <p id="networkStatus"></p>
   
        
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About Us</h1>
                </div>
                <div class="content">
                    <h3>'TEXPRESS'</h3>
                    <p>Welcome to 'TEXPRESS'! We are a dedicated team passionate about enhancing your travel experiences and simplifying the process of planning and organizing your trips. With our innovative platform, we aim to provide you with a seamless and convenient way to explore the World and create unforgettable memories</p>
                    <div class="showMore">
                        <a id="showMoreLink"href="#">Read More</a>
                    </div>
                    <div id="hiddencontent" class="hidden-content">
                    <h2>Our Mission</h2>
                    <p>Empowering travelers to explore the world effortlessly. Simplifying planning, booking, and itinerary management. Creating unforgettable journeys. Promoting sustainable and responsible travel. </p>
                    </div>
                </div>
                <div class="social">
                    <a href=""><i class="fab fa-facebook-f"></i> </a>
                    <a href=""><i class="fab fa-twitter"></i> </a>
                    <a href=""><i class="fab fa-instagram"></i> </a>
                </div>
            </div >
            <div class="image-section">
                <img src="download.jpeg">
        </div>
    </div>
    <script>const showMoreLink = document.getElementById('showMoreLink');
const hiddenContent = document.getElementById('hiddencontent');

showMoreLink.addEventListener('click',function () {
    hiddenContent.style.display = (hiddenContent.style.display === 'none') ? 'block' : 'none';

    showMoreLink.textContent = (hiddenContent.style.display === 'none') ? 'Read More' : 'Read Less';
});</script>
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

<?php
        include 'footer.php';
    ?>
    
</body>
</html>