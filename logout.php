<?php
    session_start();
    include "conn.php";

    $email = $_SESSION['email'];
    $onstat = "OFFLINE";

    $update = "UPDATE `users` SET `onstat` = '$onstat' WHERE email = '$email'";
    $conn->query($update);

    $logs = "INSERT INTO logs (date, user, action)
                       VALUES (NOW(), '$email', 'Logged Out')";
    $conn -> query($logs);

    $_SESSION['email'] = "";
    $_SESSION['onstat'] = "";
    header("location:index.php");
?>