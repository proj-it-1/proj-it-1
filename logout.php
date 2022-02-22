<?php 
    session_start();

    $_SESSION['email'] = "";
    $_SESSION['onstat'] = "";
    header("location:index.php");
?>