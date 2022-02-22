<?php
	session_start();
    if($_SESSION['email'] !==""){
		header("location:index.php");
	}
?>

<html>
    <title>
        login
    </title>

    <body>
        <form method=POST action="loginpage.php">
            <center>
                <table >
                    <tr>
                        <td>
                            <p> Email </p>
                        </td>
                        <td>
                            <input type="text" name="email" required>    
                        </td>  
                    </tr>

                    <tr>
                        <td>
                            <p> Password </p>
                        </td>
                        <td>
                            <input type="password" name="pword" required>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <br>
                            <input type="submit" name="login" value="login">
                        </td>
                    </tr>
                </table>
            </center>
        </form>
    </body>
</html>

<?php 
    include "conn.php";

	if(isset($_POST['login'])){
		$email=$_POST['email'];
		$pass=$_POST['pword'];

        $_SESSION['email'] = $email;
        $_SESSION['onstat'] = "ONLINE";
        $onstat = $_SESSION['onstat'];
        
        $view="SELECT * FROM users WHERE (email = '$email' AND password = '$pass') AND status = 'APPROVED'";
        $result = $conn->query($view);

        if($result->num_rows>0){
            $update = "UPDATE `users` SET `$onstat` = '' WHERE email = '$email'";
            $conn->query($update);

            echo "<script>window.location.href='index.php'</script>";
        }else{
            ?>
				<script>
					alert("Wrong Email of Password!");
			    </script>
			<?php
        }
    }
?>