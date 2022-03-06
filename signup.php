<!DOCTYPE html>

<?php
    include "conn.php";
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Personalized Stickers | Labelin</title>
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <!-- custom css file link  -->
	<link rel="stylesheet" href="css/signup.css">

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
              <li><a onclick="navToggle();" href="index.php">home</a></li>
              <li><a onclick="navToggle();" href="gallery.php">gallery</a></li>
              <li><a onclick="navToggle();" href="#">materials</a></li>
              <li><a onclick="navToggle();" href="#">design service</a></li>
              <li><a onclick="navToggle();" href="#">contact us</a></li>
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

<!--Reg Form-->
<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    
        <form method="POST" action="register.php">
          <div class="form">

            <div class="inputfield">
                <label>First Name</label>
                <input type="text" name="firstName" class="input">
            </div>

            <div class="inputfield">
                <label>Last Name</label>
                <input type="text" name="lastName" class="input">
            </div>

            <div class="inputfield">
                <label>Password</label>
                <input type="password" name="pass" class="input">
            </div>

            <div class="inputfield">
                <label>Confirm Password</label>
                <input type="password" name="confirmPass" class="input">
            </div>

              <div class="inputfield">
                <label>Address</label>
                <input type="text" name="address" class="input">
            </div>

            <div class="inputfield">
                <label>City</label>
                <input type="text" name="city" class="input">
            </div>

              <div class="inputfield">
                <label>State</label>
                <div class="custom_select">
                  <select name="state">
                    <option value=1>Alabama</option>
                    <option value=2>Alaska</option>
                    <option value=3>Arizona</option>
                    <option value=4>Arkansas</option>
                    <option value=5>California</option>
                    <option value=6>Colorado</option>
                    <option value=7>Connecticut</option>
                    <option value=8>Delaware</option>
                    <option value=9>Florida</option>
                    <option value=10>Georgia</option>
                    <option value=11>Hawaii</option>
                    <option value=12>Idaho</option>
                    <option value=13>Illinois</option>
                    <option value=14>Indiana</option>
                    <option value=15>Iowa</option>
                    <option value=16>Kansas</option>
                    <option value=17>Kentucky</option>
                    <option value=18>Louisiana</option>
                    <option value=19>Maine</option>
                    <option value=20>Maryland</option>
                    <option value=21>Massachusetts</option>
                    <option value=22>Michigan</option>
                    <option value=23>Minnesota</option>
                    <option value=24>Mississippi</option>
                    <option value=25>Missouri</option>
                    <option value=26>Montana</option>
                    <option value=27>Nebraska</option>
                    <option value=28>Nevada</option>
                    <option value=29>New Hampshire</option>
                    <option value=30>New Jersey</option>
                    <option value=31>New Mexico</option>
                    <option value=32>New York</option>
                    <option value=33>North Carolina</option>
                    <option value=34>North Dakota</option>
                    <option value=35>Ohio</option>
                    <option value=36>Oklahoma</option>
                    <option value=37>Oregon</option>
                    <option value=38>Pennsylvania</option>
                    <option value=39>Rhode Island</option>
                    <option value=40>South Carolina</option>
                    <option value=41>South Dakota</option>
                    <option value=42>Tennessee</option>
                    <option value=43>Texas</option>
                    <option value=44>Utah</option>
                    <option value=45>Vermont</option>
                    <option value=46>Virginia</option>
                    <option value=47>Washington</option>
                    <option value=48>West Virginia</option>
                    <option value=49>Wisconsin</option>
                    <option value=50>Wyoming</option>
                  </select>
                </div>
            </div>

              <div class="inputfield">
                <label>Zip</label>
                <input type="text" name="zip" class="input">
              </div>

              <div class="inputfield">
                <label>Email</label>
                <input type="text" name="emailAdd" class="input" >
              </div>

              <div class="inputfield">
                <label>Phone Number</label>
                <input type="text" name="phoneNum" class="input" maxlength="11">
            </div>

            <div class="inputfield terms">
                <label class="check">
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
                <p>Agreed to terms and conditions</p>
            </div>

            <div class="inputfield">
              <input type="submit" name="register" value="Register" class="btn">
            </div>
          </div>
        </form>

   
</div>

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

<!-- custom js file link  -->
<script src="js/script.js"></script>
	
</body>
</html>
