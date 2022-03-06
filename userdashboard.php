<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/userdashboard.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="header-1">
    
            <div class="icons">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-youtube"></a>
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
                <li><a onclick="navToggle();" href="index.html">home</a></li>
                <li><a onclick="navToggle();" href="gallery.html">gallery</a></li>
                <li><a onclick="navToggle();" href="materials.html">materials</a></li>
                <li><a onclick="navToggle();" href="design.html">design service</a></li>
                <li><a onclick="navToggle();" href="contact.html">contact us</a></li>
            </ul>
        </nav>

    </div>

</header>
    
<!-- header section ends -->



<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>sign in</h3>
        <h3>registered customer</h3>

        <span>email address</span>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="signup.html">create one</a></p>
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

<!-- home section end  -->

<!-- how to order section starts  -->

<section  id="orders">

    <h1 class="heading"> <span>how to order</span> </h1>
        <div  class="orders">

            <div class="box-orders">
                <h3 class="step-label">Step</h3>
                <div class="steps">01</div>
                <div class="content-orders">
                    <h3>CHOOSE SHAPE</h3>
                    <p>Choose between: Squares, Circles, Rectangles, Ovals or available Special Shapes.</p>
                </div>
            </div>
    
            <div class="box-orders">
                <h3 class="step-label">Step</h3>
                <div class="steps">02</div>
                <div class="content-orders">
                    <h3>TYPE</h3>
                    <p>Select from smoothie MATTE, good-looking GLOSSY or resistant WATERPROOF.</p>
                </div>
            </div>
    
            <div class="box-orders">
                <h3 class="step-label">Step</h3>
                <div class="steps">03</div>
                <div class="content-orders">
                    <h3>SIZE & QUANTITY</h3>
                    <p>Pick your size, note that size is: Width by Height (WxH)</p>
                </div>
            </div>

            <div class="box-orders">
                <h3 class="step-label">Step</h3>
                <div class="steps">04</div>
                <div class="content-orders">
                    <h3>QUANTITY</h3>
                    <p>Pick your quantity. The more you buy the more you save.</p>
                </div>
            </div>
    
            <div class="box-orders">
                <h3 class="step-label">Step</h3>
                <div class="steps">05</div>
                <div class="content-orders">
                    <h3>UPLOAD IMAGE</h3>
                    <p>Easily upload your file and check the preview. (PDF,PNG,JPG)</p>
                </div>
            </div>

        </div>
        
        <div class="content-create">
            <a href="#" class="btn-create">CREATE YOUR LABEL</a>
        </div>

</section>


<!-- how to order section ends -->

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured labels</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="featured-icons">
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
                <div class="featured-icons">
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
                <div class="featured-icons">
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
                <div class="featured-icons">
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
                <div class="featured-icons">
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
                <div class="featured-icons">
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
                <div class="featured-icons">
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
                <div class="featured-icons">
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
                <div class="featured-icons">
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
                <div class="featured-icons">
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

        <div class="featured-create">
            <a href="#" class="btn-featured">View more labels</a>
        </div>

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
            <img src="image/labelin-logo.png" class="footer-logo" alt="">

                <p class="footer-text">Easy online ordering for beautiful product labels and packaging decoration</p>
        
        </div>

        <div class="box">
            <h3>navigation</h3>
            <a href="index.html"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="gallery.html"> <i class="fas fa-arrow-right"></i> gallery </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> materials </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> design service </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact us </a>
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

</body>
</html>