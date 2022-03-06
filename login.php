<?php
	include "conn.php";
	include "security.php";

	//Date Time Variables
	date_default_timezone_set("Asia/Manila");
	$datenow = date("h:i A m/d/Y");
	$timenow = date("h:i A m/d/Y");
	$notify = $attempt = $logtime = $passerr = "";
	$endtime = date("h:i A m/d/Y", strtotime("+15 minutes", strtotime($timenow)));

	if(isset($_POST['login']))
  	{
		//Input Variables
		$email=$_POST['email'];
		$pass=$_POST['password'];
        

    	$sql="SELECT * FROM users WHERE email = '$email'";
        		
		//Credential Check SQL
    	$result = mysqli_query($conn,$sql);
    	$number = mysqli_num_rows($result);

    	if($number>0)
    	{
      		$row = mysqli_fetch_array($result);
      		$role = $row['role'];
     	 	$dbemail = $row['email'];
			$status = $row['status'];
      		$dbpass = $row['password'];
      		$dbattempt = $row['attempt'];
      		$dblogtime = strtotime($row['logtime']);
      		$mylogtime = $row['logtime'];
      		$newtime = strtotime($timenow);

			//Session 
      		$_SESSION['email'] = $email;
      		$_SESSION['onstat'] = "ONLINE";
      		$onstat = $_SESSION['onstat'];

			//Admin login
      		if($role == "ADMIN" AND $status = "APPROVED")
      		{
				//Password Check
        		if($dbpass == $pass)
        		{
					//Insert to Logs
					$logs = "INSERT INTO logs (date, user, action)
							VALUES (NOW(), '$email', ' Admin Login')";
					$conn -> query($logs);

        			?>
        			<script>
        				alert("Welcome Administrator!")
        				window.location.href='admindashboard.php';
        			</script>
        			<?php
        		}
        		else
        		{
					?>
        			<script>
        			alert("Hi Admin! your password is incorrect!");
					</script>
        			<?php
        		}
      		}
			//User Login
      		else if ($role == "USER" AND $status = "APPROVED")
      		{
				//logtime and Password Check
        		if($dblogtime <= $newtime)
        		{
          			if($dbpass == $pass)
          			{
            			mysqli_query($conn, "UPDATE users SET attempt = '', logtime = '', onstat = '$onstat' WHERE email='$email'");
            			
						//Insert to Logs
						$logs = "INSERT INTO logs (date, user, action)
								VALUES (NOW(), '$email', ' User Login')";
						$conn -> query($logs);
						
						?>
            			<script>
              				alert("Welcome User!")
        					window.location.href='index.php';
            			</script>
            			<?php
          			} 
          			else
          			{
						//User Login Attempts
            			$attempt = $dbattempt + 1;
            			if($attempt >= 3)
            			{
              				$attempt = 3;
              				mysqli_query($conn, "UPDATE users SET attempt = '$attempt', onstat = 'OFFLINE', logtime = '$endtime' WHERE email='$email'");
              				?>
                			<script>
                  				alert("Password is Incorrect Again! \nYou already reach the maximum times attempt to login. Please Login after 15 minutes: <?php echo $endtime ?>")
                  				window.location.href='index.php';
                			</script>
              				<?php  
							//Destroy Session 
              				$_SESSION['email'] = "";
              				$_SESSION['onstat'] = "OFFLINE";
            			}
            			else
            			{
              				mysqli_query($conn, "UPDATE users SET attempt = '$attempt', onstat = 'OFFLINE' WHERE email='$email'");
              				?>
                			<script>
                  				alert("Incorrect Password! Please Try Again. Attempts: (<?php echo $attempt?>/ 3)")
                  				window.location.href='index.php';
                			</script>
              				<?php   
							//Destroy Session
              				$_SESSION['email'] = "";
              				$_SESSION['onstat'] = "OFFLINE";                    
            			}
          			}
       			}
        		else
        		{
					//Attempt Check
          			mysqli_query($conn, "UPDATE users SET onstat = 'OFFLINE' WHERE email='$email'");
          			?>
            		<script>
              			alert('All Current Attempts Used! Please Try Again at <?php echo $endtime ?>')
              			window.location.href='index.php';
            		</script>
          			<?php 
					//Destroy Session 
          			$_SESSION['email'] = "";
          			$_SESSION['onstat'] = "OFFLINE";
        		}
      		}
			else
			{
				//Pending Account
				?>
            	<script>
              		alert('Account Still on Pending Status! Please Wait for Approval.')
              		window.location.href='index.php';
            	</script>
          		<?php 
				//Destroy Session
				$_SESSION['email'] = "";
				$_SESSION['onstat'] = "OFFLINE";
			}
    	}
    	else
    	{
			//Unregistered Emails
      		?>
      		<script>
        		alert("Username is not Registered")
        		window.location.href='index.php';
      		</script>
      		<?php 
			//Destroy Session   
      		$_SESSION['email'] = "";
      		$_SESSION['onstat'] = "";
    	}
  	}
?>