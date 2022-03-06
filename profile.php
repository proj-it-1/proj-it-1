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
    <link rel="stylesheet" href="css/style.css">

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

    <!-- for logged in and unlogged users -->
    <?php 
        session_start();

        if(!$_SESSION['email']){
            ?>
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
            <?php
        }else if($_SESSION['email']==""){
            ?>
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
            <?php
        }else{
            ?>
                <div id="close-login-btn" class="fas fa-times"></div>
                <h3><a onclick="navToggle();" href="profile.php">Profile</a></h3>
                <br>
                <h3><a onclick="navToggle();" href="logout.php">Logout</a></h3>
            <?php
        }
    ?>
    <!-- end of logged in and unlogged users code -->
</div>


<!-- profile section ends -->
<form method= POST action="profile.php">
    <center>

    <!-- Temporary table style -->
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>

    <!-- user profile inputs -->

    <?php
        include "conn.php";
        //profile 1 sql
        $email = $_SESSION['email'];
		$profile1 = "SELECT * FROM users WHERE email = '$email'";
		$result1 = $conn->query($profile1);
		
        if($result1->num_rows>0){
            $row = mysqli_fetch_array($result1);
            $user_id = $row['user_id'];
            $emailadd = $row['email'];
            $pass = $row['password'];
        }else{
            echo "Nothing to Show";
        }
    ?>
    <form method= POST action="profile.php">
        <table>
            <tr>
                <th colspan=2> <h1>User Profile</h1> </th>
            </tr>
            <tr>
                <td><h2>User ID: </h2></td>
                <td><input type="text" name="user_id1" class="box" placeholder="User ID" value='<?php echo $user_id; ?>' readonly></td>
            </tr>
            <tr>
                <td><h2>Email Address: </h2></td>
                <td><input type="email" name="email" class="box" placeholder="Enter Your Email"  value='<?php echo $emailadd; ?>' readonly></td>
            </tr>
            <tr>
                <td><h2>Password: </h2></td>
                <input type="password" name="opword" value='<?php echo $pass; ?>' hidden>
                <td><input type="password" name="pword" class="box" placeholder="Enter your old password" required></td>
            </tr>
            <tr>
                <td><h2>New Password: </h2></td>
                <td><input type="password" name="npword" class="box" placeholder="Enter new password" required ></td>
            </tr>
            <tr>
                <td><h2>Confirm Password: </h2></td>
                <td><input type="password" name="conpword" class="box" placeholder="Confirm new password" required></td>
            </tr>
            <tr>
                <th colspan=2><input type="submit" name="submit" class="box" value="Confirm"></th>
            </tr>
        </table>
    </form>

    <br>
    
    <!-- profile info inputs -->

    <?php
        //profile 2 sql
		$profile2 = "SELECT * FROM user_profile WHERE user_id = '$user_id'";
		$result2 = $conn->query($profile2);
		
        if($result2->num_rows>0){
            $row = mysqli_fetch_array($result2);
            $user_id2 = $row['user_id'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $address = $row['address'];
            $city = $row['city'];
            $state = $row['state'];
            $zip = $row['zip'];
            $pnum = $row['phonenumber'];
        }else{
            echo "Nothing to Show";
        }
    ?>
    <form method= POST action="profile.php">
        <table>
            <tr>
                <th colspan=2> <h1>Profile Info</h1> </th>
            </tr>
            <tr>
                <td><h2>User ID: </h2></td>
                <td><input type="text" name="user_id2" class="box" placeholder="User ID" value='<?php echo $user_id2; ?>' readonly></td>
            </tr>
            <tr>
                <td><h2>First Name: </h2></td>
                <td><input type="text" name="fname" class="box" placeholder="your firstname" value='<?php echo $fname; ?>' required></td>
            </tr>
            <tr>
                <td><h2>Last Name: </h2></td>
                <td><input type="text" name="lname" class="box" placeholder="your lastname" value='<?php echo $lname; ?>' required></td>
            </tr>
            <tr>
                <td><h2>Address: </h2></td>
                <td><input type="text" name="address" class="box" placeholder="your address" value='<?php echo $address; ?>' required></td>
            </tr>
            <tr>
                <td><h2>City: </h2></td>
                <td><input type="text" name="city" class="box" placeholder="your city" value='<?php echo $city; ?>' required></td>
            </tr>
            <tr>
                <td><h2>State: </h2></td>
                <td><input type="text" name="txtstate" class="box" placeholder="your state" value='<?php echo $state; ?>' hidden>
                    <div class="custom_select">
                    <select name="state">
                        <?php 
                            //loop for states
                            $statesview = mysqli_query($conn, "SELECT * FROM states_tbl");
                            if($statesview->num_rows > 0){
                                while($row = $statesview -> fetch_assoc()){
                                    if($row['state_id'] == $state){
                                        echo "<option value=".$row['state_id']." selected >".$row['state_name']."</option>";
                                    }else{
                                        echo "<option value=".$row['state_id'].">".$row['state_name']."</option>";
                                    }
                                }
                            }else{
                                echo "<center>0 Results</center>";
                            }
                        ?>
                    </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td><h2>ZIP: </h2></td>
                <td><input type="text" name="zip" class="box" placeholder="your zip" value='<?php echo $zip; ?>' required></td>
            </tr>
            <tr>
                <td><h2>Phone Number: </h2></td>
                <td><input type="text" name="pnum" class="box" placeholder="your phonenumber" value='<?php echo $pnum; ?>' required></td>
            </tr>
            <tr>
                <th colspan=2><input type="submit" name="psubmit" class="box" value="Confirm"></th>
            </tr>
        </table>
    </form>

    </center>
</form>
<!-- profile section ends -->

<!-- contact us section starts -->

<section class="contact">
    <div class="wrapper-contact">
        <div class="title-contact">
            <h1 class="heading"> <span>HAVE A QUESTIONS?</span> </h1>
            <p>FEEL FREE TO CONTACT US. OUR LABEL EXPERTS WILL BE HAPPY <br> TO ASSIST YOU.  </p>
        </div>

        <div class="form-contact">
          <div class="inputfield">
              <label>First Name</label>
              <input type="text"  class="input">
          </div>  
            <div class="inputfield">
              <label>Last Name</label>
              <input type="text" class="input">
          </div>  
          <div class="inputfield">
              <label>Email</label>
              <input type="email" class="input">
          </div>  
          <div class="inputfield">
              <label>Phone Number</label>
              <input type="text" class="input">
          </div> 
          <div class="inputfield">
              <label>Message</label>
              <textarea type="textarea" class="textarea"></textarea>
          </div>
            
          <div class="inputfield">
            <input type="submit" value="SEND YOUR MESSAGE" class="btn">
          </div>
        </div>
    </div>	

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

<?php
    if(isset($_POST['submit']))
    {
        $user_id1 = $_POST['user_id1'];
        $updateemail = $_POST['email'];
        $opword = $_POST['opword'];
        $pword = $_POST['pword'];
        $npword = $_POST['npword'];
        $conpword = $_POST['conpword'];

        //Attempt update1
        //checking if email input is same as the session email
        if($pword == $opword){
            if($npword == $conpword){
                if(mysqli_query($conn, "UPDATE users SET password = '$npword' WHERE email='$updateemail'") == TRUE){
                    ?>
                        <script>
                                alert('Successfully updated')
                                window.location.href='profile.php';
                        </script>
                    <?php 
                }else{
                    ?>
                        <script>
                                alert('Update failed')
                                window.location.href='profile.php';
                        </script>
                    <?php 
                }
            }else{
                echo "<script language='javascript'>alert('New Password and Confirm Password Mismatch!')</script>";
            } 
        }else{
            echo "<script language='javascript'>alert('Wrong Password!')</script>";
        }
    }

    if(isset($_POST['psubmit']))
    {   
        $user_id2 = $_POST['user_id2'];
        $ufname = $_POST['fname'];
        $ulname = $_POST['lname'];
        $uaddress = $_POST['address'];
        $ucity = $_POST['city'];
        $ustate = $_POST['state'];
        $uzip = $_POST['zip'];
        $upnum = $_POST['pnum'];

        //Attempt update2
        //Number Duplicate Checking
        $checkmobo = mysqli_query($conn, "SELECT * FROM user_profile where phonenumber='$upnum' AND NOT user_id = '$user_id2'");
        $checkmoborow = mysqli_num_rows($checkmobo);
        if($checkmoborow > 0)
        {
            echo "<script language='javascript'>alert('Phone Number is Already Registered')</script>";
        }else{
            if(mysqli_query($conn, "UPDATE user_profile SET fname = '$ufname', lname = '$ulname', address = '$uaddress', city = '$ucity', state = '$ustate', zip = '$uzip', phonenumber = '$upnum' WHERE user_id='$user_id2'") == TRUE){
                ?>
                    <script>
                            alert('Successfully updated')
                            window.location.href='profile.php';
                    </script>
                <?php 
            }else{
                ?>
                    <script>
                            alert('Update failed')
                            window.location.href='profile.php';
                    </script>
                <?php 
            }
        }
    }
?>