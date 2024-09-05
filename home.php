<?php

//session_start();


//echo $_SESSION['supplier_name'];


/*if(isset($_SESSION['user_name'])){
    echo 'Session started...';
   echo $_SESSION['user_name'];
   echo $_SESSION['user_ID'];
}else{
    echo 'Session not started...';
    

}*/

?>

<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="HOME.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>HOME</title>
        <script>
            let i=0;
            let time=3000;
            let imgs =[];
            imgs[0]='SlideShow 03.jpg'
            imgs[1]='SlideShow 05.jpg'
            imgs[2]='SlideShow 06.jpg'
            imgs[3]='G8.jpg'

            function changeimg(){
                
                document.getElementById('slider').src=imgs[i];
                if(i<imgs.length - 1){
                    i++;
                }else{
                    i=0;
                }
                setTimeout('changeimg()',time);
            }
            
        </script>
    </head>

    <body>
        <!--header-->
        <?php include 'header.php'?>
        <!--upper body image-->
        <div class="upper_body">
            
            <img id="slider" src="G8.jpg" class="g8image">
            <script> changeimg() </script>
            <div class="text">
                <div class=text_1>Discover the <br>most beautiful <br>places</div>
            </div>   
        </div>
        <!--third section-->
        <div class="section3full">
            <div class="a">
                <input type="text" placeholder="Where to?">
            </div>
            <div class="b">
                <p>Check in</p>
                <input type="date">
            </div>
            <div class="c">
                <p>Check out</p>
                <input type="date">
            </div>
            <div class="d">
                <select class="guest">
                    <option value="null">Guests</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="1">3</option>
                    <option value="2">4</option>
                    <option value="1">5</option>
                    <option value="2">6</option>
                    <option value="1">7</option>
                    <option value="2">8</option>
                </select>    
            </div>
            <div class="e">
                <button class="submitbutton">Submit</button>
            </div>
        </div>
        <!--4th section hotel cards 1-->
        <div class="top-hotels-texta">Top Hotels</div>
        <div class="box-container1">
            <div class="box">
                <img src="10.1.jpg" alt="london">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>London</h3>
                    <p>hello london hotel management</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="15.1.jpg" alt="london">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>London</h3>
                    <p>hello london hotel management</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="3.1.jpg" alt="london">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>London</h3>
                    <p>hello london hotel management</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="7.1.jpg" alt="london">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>London</h3>
                    <p>hello london hotel management</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            </div>
            
        </div>
        <!--5th section hotel cards 2-->
        <div class="top-hotels-text">Best Places</div>
        <div class="box-container1">
            <div class="box">
                <img src="newyork.png" alt="london">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>London</h3>
                    <p>hello london hotel management</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="newyork.png" alt="london">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>London</h3>
                    <p>hello london hotel management</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="london.png" alt="london">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>London</h3>
                    <p>hello london hotel management</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="washington.png" alt="london">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>London</h3>
                    <p>hello london hotel management</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            </div>
            
        </div>
        <!--6th section hotel cards 3-->
        <div class="top-hotels-text">Secure transports</div>
        <div class="box-container1">
            <div class="box">
                <img src="washington.png" alt="london">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>London</h3>
                    <p>hello london hotel management</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="london.png" alt="london">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>London</h3>
                    <p>hello london hotel management</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="washington.png" alt="london">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>London</h3>
                    <p>hello london hotel management</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <img src="london.png" alt="london">
                <div class="content">
                    <h3><i class="fas fa-map-marker-alt"></i>London</h3>
                    <p>hello london hotel management</p>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                </div>
            </div>
            </div>
            
        </div>
        <!--footer-->
        <?php include 'footer.php'?>

        
    </body>
</html>