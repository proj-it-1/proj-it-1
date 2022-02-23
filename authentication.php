<?php
    session_start();
    $emailadd = $_GET['emailadd'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method=POST action="authentication.php">
        <center>
            <p>Click the button to verify account</p>
            <p><input type="text" value=<?php echo $emailadd; ?> name="emailadd" hidden><p>
            <br>
            <input type="submit" value="Verify" name="verify">
        </center>
    </form>
</body>
</html>

<?php
    require "conn.php";

    if(isset($_POST['verify'])){
        $email = $_POST['emailadd'];
        $update = "UPDATE `users` SET `status` = 'APPROVED' WHERE email = '$email'";
        if ($conn->query($update) === TRUE) 
        {
            echo "Successfully authenticated!";
            echo "<script>window.location.href='index.php';</script>";
        }else{
            echo "Failed to authenticate!".mysqli_connect_error();
        }   
    }
?>