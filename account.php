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

$users = "SELECT * FROM users";
$result = mysqli_query($conn,$users);

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
    <th colspan=8><h2> Accounts </h2></th>
    <tr>
        <td align=center><h3> User Id </h3></td>
        <td align=center><h3> Email </h3></td>
        <td align=center><h3> Role </h3></td>
        <td align=center><h3> Created At </h3></td>
        <td align=center><h3> Updated At </h3></td>
        <td align=center><h3> Status </h3></td>
        <td align=center><h3> Online Status </h3></td>
        <td align=center><h3> Actions </h3></td>
    </tr>
    <tbody>
        <?php while($row=mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?php echo $row['user_id'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['role'];?></td>
            <td><?php echo $row['createdat'];?></td>
            <td><?php echo $row['updatedat'];?></td>
            <td><?php echo $row['status'];?></td>
            <td><?php echo $row['onstat'];?></td>
            <td><button>Actions</button></td>
        </tr>
        <?php endwhile;?>
    </tbody>   
</table>
</center>
</body>
</html>