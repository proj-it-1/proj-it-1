<?php 
    session_start();
    include "conn.php";

    $email = $_SESSION['email'];
    $onstat = "OFFLINE";

    $update = "UPDATE `users` SET `onstat` = '$onstat' WHERE email = '$email'";
    $conn->query($update);

    $_SESSION['email'] = "";
    $_SESSION['onstat'] = "";
    header("location:index.php");
?>