<?php

include "conn.php";

$sql = "SELECT * FROM states_tbl";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<form method=POST action=register.php enctype="multipart/form-data">
<center>
    <table cellspacing=10>
        <th colspan=4> REGISTRATION </th>
        <tr>
            <td>
                <label> First Name </label>
            </td>
            <td>
                <input type=text name=firstName required>
            </td> 
            <td>
                <label> Last Name </label>
            </td>
            <td>
                <input type=text name=lastName required>
            </td> 
        </tr>
        <tr>
            <td>
                <label> Password </label>
            </td>
            <td>
                <input type=text name=pass required>
            </td> 
            <td>
                <label> Confirm Password </label>
            </td>
            <td>
                <input type=text name=confirmPass required>
            </td> 
        </tr>
        <tr>
        </tr>
        <tr>
            <td>
                <label> Address </label>
            </td>
            <td>
                <input type=text name=address required>
            </td> 
            <td>
                <label> City </label>
            </td>
            <td>
                <input type=text name=city required>
            </td> 
        </tr>
        <tr>
            <td>
                <label> State </label>
            </td>
            <td>
                <select name=state>
                <?php while($row = mysqli_fetch_array($result)):;?>
                <option value=<?php echo $row[0];?>><?php echo $row[1];?></option>
                <?php endwhile;?>
                </select>
            </td> 
            <td>
                <label> Zip </label>
            </td>
            <td>
                <input type=text name=zip required>
            </td> 
        </tr>
        <tr>
            <td>
                <label> Email Address </label>
            </td>
            <td>
                <input type=text name=emailAdd required>
            </td> 
            <td>
                <label> Phone Number </label>
            </td>
            <td>
                <input type=text name=phoneNum required>
            </td> 
        </tr>
        <tr>
			<td colspan=4 align=center>
                <input type=submit name=register value="Register">
            </td>
        </tr>
    </table>
</center>
</form>
</body>
</html>

<?php

	if(isset($_POST['register']))
    {
		$firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
		$password = $_POST['pass'];
        $confirmPass = $_POST['confirmPass'];
		$address = $_POST['address'];
        $city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$emailAdd = $_POST['emailAdd'];
        $phoneNum = $_POST['phoneNum'];
			
        $checkuser = mysqli_query($conn, "SELECT * FROM users where email='$emailAdd'");
		$checkuserrow = mysqli_num_rows($checkuser);

		if($checkuserrow > 0)
		{
		echo "<script language='javascript'>alert('Email Address is already Registered')</script>";
		}
		else
		{
            $countnumber = strlen($phoneNum);
			if($countnumber != 11)
			{
				?>
				<script>
					alert ("Invalid Mobile Number!")
				</script>
				<?php
			}
			else
			{
                $checkmobo = mysqli_query($conn, "SELECT * FROM user_profile where phonenumber='$phoneNum'");
				$checkmoborow = mysqli_num_rows($checkmobo);
				if($checkmoborow > 0)
				{
					echo "<script language='javascript'>alert('Phone Number is Already Registered')</script>";
				}
				else
				{
                    if (!filter_var($emailAdd, FILTER_VALIDATE_EMAIL))
					{
						?>
						<script>
						    alert ("Invalid Email Format!")
						</script>
						<?php
					}
					else
                    {
                        if ($_POST['pass'] === $_POST['confirmPass'])
						{
							if($firstName != null && $lastName != null )
							{
								if(!preg_match("/^[a-zA-Z ]*$/",$firstName))
								{
									?>
									<script>
										alert ("Invalid First Name(Letters and Space Only!)")
									</script>
									<?php
								}
								else
								{
									if(!preg_match("/^[a-zA-Z ]*$/",$lastName))
									{
										?>
										<script>
											 alert ("Invalid Last Name(Letters and Space Only!)")
										</script>
										<?php
									}
									else
									{
                                        date_default_timezone_set('Asia/Manila');
								        $datenow = date('Y-m-d H:i:s');
                                        $sql = "INSERT INTO users (password,email,createdat,updatedat)
								        VALUES ('$password','$emailAdd','$datenow','$datenow')";
									
								        if(mysqli_query($conn,$sql)==TRUE)
								        {
                                            $nuserid=$conn->insert_id;
                                            $sqlnuser = "INSERT INTO user_profile (user_id,fname,lname,address,city,state,zip,phonenumber,createdat,updatedat)
												VALUES ('$nuserid','$firstName','$lastName','$address','$city',$state,'$zip',$phoneNum,'$datenow','$datenow')";

                                            if(mysqli_query($conn,$sqlnuser)==TRUE)
                                            {
                                                //sending email
                                                $textmessage = "Please verify your account here: http://localhost/proj-it-1/authentication.php?emailadd=$emailAdd";
                                                
                                                //sends email of verification
                                                require_once('PHPMailer/PHPMailerAutoload.php');
                                                
                                                $mail = new PHPMailer();
                                                $mail->isSMTP();
                                                $mail->SMTPDebug = 3;
                                                $mail->SMTPAuth = true;
                                                $mail->SMTPSecure = 'ssl';
                                                $mail->Host = 'smtp.gmail.com';
                                                $mail->Port = '465';
                                                $mail->isHTML();
                                                $mail->Username = 'olfuprojit1@gmail.com';
                                                $mail->Password = 'projit123';
                                                $mail->SetFrom('no-reply@howcode.org');
                                                $mail->Subject = 'Authentication';
                                                $mail->Body = $textmessage;
                                                $mail->AddAddress($emailAdd);
                                                
                                                $mail->Send();

                                                echo "<script language='javascript'>alert('You successfully Registered!')</script>";	
                                                echo "<script>window.location.href='index.php';</script>";
                                            }
                                            else
                                            {
                                                $sql = "DELETE FROM users WHERE id=$nuserid";

                                                if ($conn->query($sql) === TRUE) 
                                                {
                                                    echo "Failed to Register! Try to Register Again!".mysqli_connect_error();
                                                }           
                                            }
                                        }
                                        else
                                        {
                                            echo "Failed to Register!".mysqli_connect_error();
                                        }
                                    }
                                }
                            }
                            else
                            {
                                echo "<script language='javascript'>alert('Empty Fields!')</script>";	
                            }
                        }
                        else
						{
							?>
							<script>
								alert ("Password not Match!")
							</script>
							<?php
						}
                    }
                }
            }
        }
    }	

?>