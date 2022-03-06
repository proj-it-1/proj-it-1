<!DOCTYPE html>

<?php
    include "conn.php";

    session_start();

    $uname = $_SESSION['email'];
    $onstat = $_SESSION['onstat'];
    echo $uname . " ";
    echo $onstat;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized Stickers | Labelin</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">
    <div class="header-1">
        <a href="#" class="logo"> <img src="image/labelin-logo.png" alt=""></a>

        <form action="" class="search-form">

        </form>

        <div class="icons">
            <div id="search-btn"></div>
            <a href="#" class="fas fa-shopping-cart"></a>
            <div id="login-btn" class="fas fa-user"></div>
        </div>
    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#featured">gallery</a>
            <a href="#arrivals">materials</a>
            <a href="#reviews">design service</a>
            <a href="#blogs">contact us</a>
        </nav>
    </div>

</header>

<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs"  class="fas fa-phone"></a>
</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form method= POST action="login.php">
        <h3>sign in</h3>
        <span>username</span>
        <input type="email" name="email" class="box" placeholder="Enter Your Email" id="" required>
        <span>password</span>
        <input type="password" name="password" class="box" placeholder="Enter Your Password" id="" required>
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" name="login" value="login" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="signup.php">create one</a></p>
    </form>

</div>




<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Custom Labels and Stickers</h3>
            <p>EASY ONLINE ORDERING FOR BEAUTIFUL PRODUCT LABELS AND PACKAGING DECORATION.</p>
            <a href="#" class="btn">ORDER NOW</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="image/label-1.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/label-2.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/label-3.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/label-4.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/label-5.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/label-6.png" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- home section ense  -->

<!-- how to order section starts  -->

<section class="orders" id="orders">

    <h1 class="heading"> <span>how to order</span> </h1>

    <div class="swiper orders-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <p>Step1 </p>
                <h3>choose shape</h3>
                <p>Choose between: Squares, Circles, Rectangles, Ovals or available Special Shapes.</p>

            </div>

            <div class="swiper-slide box">
                <p>Step 2</p>
                <h3>type</h3>
                <p>Select from smoothie MATTE, good-looking GLOSSY or resistant WATERPROOF.</p>

            </div>

            <div class="swiper-slide box">
                <p>Step 3</p>
                <h3>size and quantity</h3>
                <p>Pick your size, note that size is: Width by Height (WxH)</p>

            </div>
            <div class="swiper-slide box">
                <p>Step 4</p>
                <h3>quantity</h3>
                <p>Pick your quantity. The more you buy the more you save.</p>

            </div>

            <div class="swiper-slide box">
                <p>Step 5</p>
                <h3>upload image</h3>
                <p>Easily upload your file and check the preview. (PDF,PNG,JPG)</p>

            </div>


        </div>

    </div>

</section>

<!-- how to order section ends -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured labels</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
                <div class="image">
                    <img src="image/label-1.png" alt="">
                </div>
                <div class="content">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
                <div class="image">
                    <img src="image/label-2.png" alt="">
                </div>
                <div class="content">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
                <div class="image">
                    <img src="image/label-3.png" alt="">
                </div>
                <div class="content">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
                <div class="image">
                    <img src="image/label-4.png" alt="">
                </div>
                <div class="content">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
                <div class="image">
                    <img src="image/label-5.png" alt="">
                </div>
                <div class="content">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
                <div class="image">
                    <img src="image/label-6.png" alt="">
                </div>
                <div class="content">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
                <div class="image">
                    <img src="image/label-1.png" alt="">
                </div>
                <div class="content">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
                <div class="image">
                    <img src="image/label-2.png" alt="">
                </div>
                <div class="content">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
                <div class="image">
                    <img src="image/label-3.png" alt="">
                </div>
                <div class="content">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
                <div class="image">
                    <img src="image/label-4.png" alt="">
                </div>
                <div class="content">
                    <h3>LABEL STICKERS ON A ROLL</h3>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- contact us section starts -->

<section class="contact">

    <form action="">
        <h3>subscribe for latest updates</h3>
        <input type="email" name="" placeholder="enter your email" id="" class="box">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>

<!-- contact section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>our locations</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> africa </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> arrivals </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>17972 Sky Park Circle Building 47/B
                Irvine, CA, 92614 </a>
            <a href="#"> <i class="fas fa-phone"></i> 949-333-5204</a>
            <a href="#"> <i class="fas fa-envelope"></i> contact@labelin.us </a>
            <img src="image/worldmap.png" class="map" alt="">
        </div>

    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"> created by <span>Mr.Paolo</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

<!-- loader  -->

<div class="loader-container">
    <img src="image/labelin-logo.png" alt="">
</div>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>

<?php

?>
