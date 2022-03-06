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

  //Get Pending User Registrations
  $pending = 0;

  $pencheck = $conn -> query("SELECT * FROM users WHERE status = 'PENDING'");
  while($found = mysqli_fetch_array($pencheck))
  {
    $pending += 1;
  }

$logs = "SELECT * FROM logs ORDER BY date DESC";
$result = mysqli_query($conn,$logs);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charseet="UTF-8">
    <title>Labelin Admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/admindashboard.css">
    <script type="text/javascript">
        $(document).ready(function()
        {
         // Activate tooltip
         $('[data-toggle="tooltip"]').tooltip();

         // Select/Deselect checkboxes
         var checkbox = $('table tbody input[type="checkbox"]');
         $("#selectAll").click(function()
         {
          if(this.checked){
           checkbox.each(function()
           {
            this.checked = true;
           });
          }
          else
          {
           checkbox.each(function()
           {
            this.checked = false;
           });
          }
         });
         checkbox.click(function()
         {
          if(!this.checked)
          {
           $("#selectAll").prop("checked", false);
          }
         });

        });
        </script>
</head>
<body>
        <div class="sidebar">
            <div class="sidebar-brand">
                <img src="image/labelin-logo.png" class="labelinlogo" alt="">
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="admindashboard.php"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="admininventory.php" ><span class="las la-clipboard-list"></span>
                        <span>Inventory</span></a>
                    </li>
                    <li>
                        <a href="" ><span class="las la-receipt"></span>
                        <span>Orders</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-users"></span>
                        <span>Customers</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-paste"></span>
                        <span>Reports</span></a>
                    </li>
                    <li>
                        <a href="adminaccounts.php"><span class="las la-user-circle"></span>
                        <span>Accounts <font style= color:red;>(<?php echo $pending?>)</font></span></a>
                    </li>
                    <li>
                        <a href="" class="active"><span class="las la-igloo"></span>
                        <span>Logs</span></a>
                    </li>
                </ul>
                <a href="logout.php"><div>
                    <button class="btnlogout" role="button">Logout <span class="las la-door-open"></span></button>
                </div></a>
            </div>
        </div>
        <div class = "main-content">
             <header>
                    <h1>
                        <label for="">
                            <span class="la la-bars"></span>
                        </label>
                        Logs
                    </h1>
                    <div class="search-wrapper">
                        <span class ="las la-search"></span>
                        <input type="research" placeholder="Search here">
                    </div>
                    <div class="user-wrapper">
                        <img src="image/usericon.png" width="30px" height="30px" alt="">
                        <div>
                            <h4><?php echo "$email"?></h4>
                            <small><?php echo "$role"?></small>
                        </div>
                    </div>
            </header>


            <main>

                <div class="table-grid">
                        <div class="orders">
                            <div class="table-card">
                                <div class="table-grid-header">
                                    <h1><b>Log History</b></h1>
                                    <br>
                                </div>
                                <div class="table-grid-card-body">
                                    <table width=100%>
                                        <thead>
                                            <tr class="tr-head">
                                                <th></th>
                                                <th>Log Id</th>
                                                <th>Date</th>
                                                <th>User</th>
                                                <th>Action</th>
                                            </tr>
                                        </div>
                                        </thead>
                                    <tbody>
                                        <?php while($row=mysqli_fetch_assoc($result)):?>
                                        <tr>
                                            <th></th>
                                            <td><?php echo $row['logs_id'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['user'];?></td>
                                            <td><?php echo $row['action'];?></td>
                                         </tr>
                                         <?php endwhile;?>
                                        </tbody>
                                    </table>
                            </div>
                                </div>
                            </div>
                        </div>

                </div>
            </main>
        </div>

</body>
</html>