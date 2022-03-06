<!DOCTYPE html>

<?php
    include "conn.php";
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized Stickers | Labelin</title>

     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  
  

    <link rel="stylesheet" href="css/materials.css"/>
    
</head>
<body>
      
<!-- header section starts  -->


<header>

    <div class="header-1">
    
            <div class="icons">
                <a href="https://www.facebook.com/Labelinusa" target="_blank" class="fab fa-facebook-f"></a>
                <a href="https://www.instagram.com/labelinus/" target="_blank" class="fab fa-instagram"></a>
                <a href="https://twitter.com/Labelinusa" target="_blank" class="fab fa-twitter"></a>
                <a href="https://www.pinterest.ph/labelin2/" target="_blank" class="fab fa-pinterest"></a>
                <a href="https://www.youtube.com/channel/UCUsRAPvcbefI_vldBEAEumQ" target="_blank" class="fab fa-youtube"></a>
            </div>

            <div class="icons">
                <div id="login-btn" class="fas fa-user"></div>
                <a href="#" class="fas fa-shopping-cart"></a>
            </div>

    </div>

    <div class="header-2">

        <a href="#" class="logo"> <img src="image/labelin-logo.png"> </a>

        <div id="menu" class="fas fa-bars" onclick="navToggle();"></div>

        <nav class="navbar">
            <ul>
                <li><a onclick="navToggle();" href="index.php">home</a></li>
                <li><a onclick="navToggle();" href="gallery.php">gallery</a></li>
                <li><a onclick="navToggle();" href="materials.php">materials</a></li>
                <li><a onclick="navToggle();" href="design.php">design service</a></li>
                <li><a onclick="navToggle();" href="contact.php">contact us</a></li>
            </ul>
        </nav>

    </div>

</header>
    
<!-- header section ends -->

<!-- login form  -->
<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form method= POST action="login.php">
        <h3>sign in</h3>
        <h3>registered customer</h3>
        
        <span>email address</span>
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


<!--materials starts here-->
  
<section  id="orders">

    <h1 class="heading"> <span>Materials</span> </h1>
    
</section>



<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <img src="image/labelin-logo.png" class="footer-logo" alt="">

                <p class="footer-text">Easy online ordering for beautiful product labels and packaging decoration</p>
        
        </div>

        <div class="box">
            <h3>navigation</h3>
            <a href="index.php"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="gallery.php"> <i class="fas fa-arrow-right"></i> gallery </a>
            <a href="materials.php"> <i class="fas fa-arrow-right"></i> materials </a>
            <a href="design.php"> <i class="fas fa-arrow-right"></i> design service </a>
            <a href="contact.php"> <i class="fas fa-arrow-right"></i> contact us </a>
        </div>

        <div class="box">
            <h3>account</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Login </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> FAQs </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Terms &#38; Conditions </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Refund-Return Policy </a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Custom Labels </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Customer Stickers </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Mason Jar Labels and Stickers </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Candle Labels </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Clothing Labels </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Faux Gold Labels </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>17972 Sky Park Circle Building 47/B
                Irvine, CA, 92614 </a>
            <a href="#"> <i class="fas fa-phone"></i> 949-333-5204</a>
            <a href="#"> <i class="fas fa-envelope"></i> contact@labelin.us </a>
        </div>
    
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-pinterest"></a>
        <a href="#" class="fab fa-youtube"></a>
    </div>

    <div class="credit"> © 2022 Labelin | Web Design by (Mr. Pawlo) </div>

</section>

<!-- footer section ends -->
 


 <script>

    let menu = document.querySelector('#menu')
    let navbar = document.querySelector('.navbar');
    let header2 = document.querySelector('.header-2');
    
    function navToggle(){
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('nav-toggle');
    }
    
    window.addEventListener('scroll',function(){
    
        menu.classList.remove('fa-times');
        navbar.classList.remove('nav-toggle');
    
        if(window.scrollY > 60){
            header2.classList.add('sticky');
        }else{
            header2.classList.remove('sticky');
        }
    
    });
    
    
 </script>
    
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script src="js/script-gallery.js"></script>


  </body>
</html>
