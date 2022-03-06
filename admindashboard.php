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

  //Get Newest Customer
  $newestemail = "";
  $newestdate = "";

  $newestcheck = $conn -> query("SELECT * FROM users WHERE status = 'APPROVED' AND role = 'USER' ORDER BY createdat ASC LIMIT 0, 5");
  while($foundnew = mysqli_fetch_array($newestcheck))
  {
    $newestemail = $foundnew['email'];
    $newestdate = date('d/m/Y', strtotime($foundnew['createdat']));
  }
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

<body>
        <div class="sidebar">
            <div class="sidebar-brand">
                <img src="image/labelin-logo.png" class="labelinlogo" alt="">
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="" class="active"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="admininventory.php"><span class="las la-clipboard-list"></span>
                        <span>Inventory</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-receipt"></span>
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
                        <a href="adminlogs.php"><span class="las la-igloo"></span>
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
                        Dashboard
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
                 <div class="cards">

                     <div class="singlecard">
                        <div>
                            <h1>0</h1>
                            <span>Customers</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                     </div>


                     <div class="singlecard">
                        <div>
                            <h1>0</h1>
                            <span>Inventory</span>
                        </div>
                        <div>
                            <span class="las la-clipboard-list"></span>
                        </div>
                     </div>

                     <div class="singlecard">
                        <div>
                            <h1>0</h1>
                            <span>Ordering</span>
                        </div>
                        <div>
                            <span class="las la-receipt"></span>
                        </div>
                     </div>
                     <div class="singlecard">
                        <div>
                            <h1><font style= color:red;><?php echo $pending?></font></h1>
                            <span>Accounts</span>
                        </div>
                        <div>
                            <span class="las la-user-circle"></span>
                        </div>
                     </div>
                </div>
                <div class="recents-grid">
                        <div class="orders">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Recent Orders</h2>
                                    <button>See all<span class="las la-arrow-right">
                                    </span></button>
                                </div>
                                <div class="card-body">
                                    <table width=100%>
                                        <thread>
                                            <tr class="tr-recentcard">
                                                <td>Name</td>
                                                <td>Shape</td>
                                                <td>Type</td>
                                                <td>Size</td>
                                                <td>Quantity</td>
                                            </tr>
                                        </thread>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="customers">
                            <div class="card">
                                <div class="card-header">
                                    <h2>New Customer</h2>
                                    <button role="button">See all<span class="las la-arrow-right">
                                    </span></button>
                                </div>
                                    <div class="card-body">
                                        <div class="customer">
                                        <div class="info">
                                            <img src="image/customer.png" width="40px" height="40px" alth="">
                                            <div>
                                                <h4><?php echo "$newestemail ($newestdate)"?></h4>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </div>
            </main>
        </div>

</body>
</html>