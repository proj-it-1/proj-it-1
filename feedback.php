<?php 
include "conn.php";
    if(isset($_POST['submit']))
    {
        //Variables
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pnum = $_POST['pnum'];
        $emailadd = $_POST['emailadd'];
        $msg = $_POST['msg'];

        $subjectstring =  "Feedback From: $fname $lname";
        $bodystring = nl2br("<b>Contact Number:</b> $pnum \n <b>Email Address:</b> $emailadd \n <b>Message:</b> $msg");

        //email sending codes
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
        $mail->Subject = $subjectstring;
        $mail->Body = $bodystring;
        $mail->AddAddress($emailadd);
        $mail->AddAddress('olfuprojit1@gmail.com');
        
        if($mail -> Send() == true)
        {
            echo "<script language='javascript'>alert('Email Sent! Please Wait for the Reply.')</script>";
            //echo "<script>window.location.href='contact.php'</script>";
            header("Location:".$_SERVER[HTTP_REFERER]);
        }
        else
        {
            echo "<script language='javascript'>alert('Email not Sent! Please Try Again.')</script>";
           //echo "<script>window.location.href='contact.php'</script>";
           header("Location:".$_SERVER[HTTP_REFERER]."?message=".$message);
        }
    }
?>