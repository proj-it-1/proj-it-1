<?php
include "conn.php";
require ('security.php');

    $email = $_SESSION['email'];
    $role = "";

    //Get User Role From DB
    $check = $conn->query("SELECT role FROM users WHERE email = '$email'");
    while($arr = mysqli_fetch_array($check))
    {
        $role = $arr['role'];
    }

$logs = "SELECT * FROM logs ORDER BY date DESC";
$result = mysqli_query($conn,$logs);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
</head>
<body>

<center>
<table border=1 cellpadding=5>
    <th colspan=4><h2> Logs </h2></th>
    <tr>
        <td align=center><h3> Logs Id </h3></td>
        <td align=center><h3> Date </h3></td>
        <td align=center><h3> User </h3></td>
        <td align=center><h3> Action </h3></td>
    </tr>
    <tbody>
        <?php while($row=mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?php echo $row['logs_id'];?></td>
            <td><?php echo $row['date'];?></td>
            <td><?php echo $row['user'];?></td>
            <td><?php echo $row['action'];?></td>
        </tr>
        <?php endwhile;?>
    </tbody>   
</table>
</center>
</body>
</html>