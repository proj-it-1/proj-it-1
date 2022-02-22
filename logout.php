<?php 
    session_start();

    $_SESSION['username'] = "";
    $_SESSION['onstat'] = "";
    header("location:index.php");
?>