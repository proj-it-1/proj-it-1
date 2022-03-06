<?php
include "conn.php";

$sql = "SELECT * FROM states_tbl";
$result = mysqli_query($conn,$sql);

if(isset($_POST['register']))
{
  //Variables
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

  //Duplicate Checking
  $checkuser = mysqli_query($conn, "SELECT * FROM users where email='$emailAdd'");
  $checkuserrow = mysqli_num_rows($checkuser);

  //Email Checking
  if($checkuserrow > 0)
  {
    echo "<script language='javascript'>alert('Email Address is already Registered')</script>";
  }

  //Checking
  else
  {
    //Number Length Checking
    $countnumber = strlen($phoneNum);
    if($countnumber != 11)
    {
      echo "<script language='javascript'>alert('Invalid Mobile Number!')</script>";
    }
    else
    {
      //Number Duplicate Checking
      $checkmobo = mysqli_query($conn, "SELECT * FROM user_profile where phonenumber='$phoneNum'");
      $checkmoborow = mysqli_num_rows($checkmobo);
      if($checkmoborow > 0)
      {
        echo "<script language='javascript'>alert('Phone Number is Already Registered')</script>";
      }
      else
      {
        //Email Format Checking
        if(!filter_var($emailAdd, FILTER_VALIDATE_EMAIL))
        {
          ?>
          <script>
              alert ("Invalid Email Format!")
          </script>
          <?php
        }
        else
        {
          //Password Checking
          if($_POST['pass'] === $_POST['confirmPass'])
          {
            //Name Checking
            if($firstName != null && $lastName != null)
            {
              //First Name Checking
              if(!preg_match("/^[a-zA-Z ]*$/",$firstName))
              {
                echo "<script language='javascript'>alert('Invalid First Name(Letters and Space Only!)')</script>";
              }
              else
              {
                //Last Name Checking
                if(!preg_match("/^[a-zA-Z ]*$/",$lastName))
                {
                  echo "<script language='javascript'>alert('Invalid Last Name(Letters and Space Only!)')</script>";
                }
                else
                {
                  //DB Insert to User Table
                  date_default_timezone_set('Asia/Manila');
                  $datenow = date('Y-m-d H:i:s');
                  $sql = "INSERT INTO users (password,email,role,createdat,updatedat,status,onstat)
                                     VALUES ('$password','$emailAdd','USER','$datenow','$datenow','PENDING','OFFLINE')";
                  if(mysqli_query($conn,$sql)==TRUE)
                  {
                    //DB Insert to User Profile Table
                    $nuserid=$conn->insert_id;
                    $sqlnuser = "INSERT INTO user_profile (user_id,fname,lname,address,city,state,zip,phonenumber,createdat,updatedat)
                                                   VALUES ('$nuserid','$firstName','$lastName','$address','$city',$state,'$zip','$phoneNum','$datenow','$datenow')";
                    if(mysqli_query($conn,$sqlnuser)==TRUE)
                    {
                        //sending email
                        $textmessage = "Please verify your account here: http://localhost/labelin.us/authentication.php?emailadd=$emailAdd";
                                                
                        //sends email of verification
                        require_once('PHPMailer/PHPMailerAutoload.php');
                        
                        $mail = new PHPMailer();
                        $mail->isSMTP();
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

                      //Successfully Registered
                      echo "<script language='javascript'>alert('You successfully Registered!')</script>";
                      echo "<script>window.location.href='index.php';</script>";
                    }
                    else
                    {
                      //Registration Failed
                      $sql = "DELETE FROM users WHERE id=$nuserid";

                      if ($conn->query($sql) === TRUE)
                      {
                          echo "Failed to Register! Try to Register Again!".mysqli_connect_error();
                      }
                    }
                  }
                  else
                  {
                    //Failed
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
            echo "<script language='javascript'>alert('Password Input Mismatch! Please Try Again.')</script>";
          }
        }
      }
    }
  }
}
?>
