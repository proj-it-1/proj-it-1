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

$users = "SELECT * FROM users";
$result = mysqli_query($conn,$users);

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
                        <a href="" class="active"><span class="las la-user-circle"></span>
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
                        Accounts
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
                                    <h1><b>Manage Account</b></h1>
                                    <br>
                                </div>
                                <div class="table-grid-card-body">
                                    <table width=100%>
                                        <thead>
                                            <tr class="tr-head">
                                                <th></th>
                                                <th>User Id</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th>Status</th>
                                                <th>Online Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </div>
                                        </thead>
                                    <tbody>
                                        <?php while($row=mysqli_fetch_assoc($result)):?>
                                        <tr>
                                            <th>
                                                <span class="custom-checkbox">
                                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                <label for="checkbox1"></label>
                                                </span>
                                            </th>
                                            <td><?php echo $row['user_id'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['role'];?></td>
                                            <td><?php echo $row['createdat'];?></td>
                                            <td><?php echo $row['updatedat'];?></td>
                                            <td><?php echo $row['status'];?></td>
                                            <td><?php echo $row['onstat'];?></td>
                                            <td>
                                            <a href="" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                            </td>
                                         </tr>
                                         <?php endwhile;?>
                                        </tbody>
                                    </table>

                    <!-- Add Modal -->
                                <!-- <div id="addEmployeeModal" class="modal fade">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Item</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                        <label>Item Name</label>
                                        <input type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Shape</label>
                                        <input type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Type</label>
                                        <input type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Size</label>
                                        <input type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="text" class="form-control" required>
                                            </div>
                                    </div>

                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-success" value="Add">
                                    </div>
                                    </form>
                                    </div>
                                    </div>
                                </div> -->

                    <!-- Edit Modal -->
                                   <!--  <div id="editEmployeeModal" class="modal fade">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                        <form>
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Record</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>Item Name</label>
                                            <input type="text" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                            <label>Shape</label>
                                            <input type="email" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                            <label>Type</label>
                                            <textarea class="form-control" required></textarea>
                                            </div>
                                            <div class="form-group">
                                            <label>Size</label>
                                            <input type="text" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                            <input type="submit" class="btn btn-info" value="Save">
                                        </div>
                                        </form>
                                        </div>
                                        </div>
                                    </div> -->
                        <!--DELETE MODAL-->

                                        <!-- <div id="deleteEmployeeModal" class="modal fade">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                            <form>
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Employee</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete these Records?</p>
                                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </div>
                                            </form>
                                            </div>
                                            </div>
                                        </div> -->

                            </div>
                                </div>
                            </div>
                        </div>

                </div>
            </main>
        </div>

</body>
</html>