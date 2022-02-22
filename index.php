<?php
	session_start();
    
?>

<html>
    <title>
    </title>

    <body>
        <form method=POST action="index.php">
            <a href="loginpage.php">Login</a>
            <a href="register.php">Register</a>
            <a href="logout.php">Logout</a>
        </form>
    </body>
</html>

<?php
    $uname = $_SESSION['email'];
    $onstat = $_SESSION['onstat'];
    echo $uname . " ";
    echo $onstat;
?>