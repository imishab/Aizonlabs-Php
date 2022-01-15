<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
adminOnly();
?>
           
 <html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel | AizonLabs</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/datatables.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
</head>


<body>
    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="../assets/img/logo1.png" width="60%" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="forms.php"><i class="fas fa-file-alt"></i> Forms</a>
                </li>
                <li>
                    <a href="users.php"><i class="fas fa-user-friends"></i>Users</a>
                </li>
                <li>
                    <a href="settings.php"><i class="fas fa-cog"></i>Settings</a>
                </li>
            </ul>
        </nav>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                    
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i>
                                    <?php if (isset($_SESSION['id'])): ?>
                                     <span><?php echo $_SESSION['username']; ?></span> 
                                     <?php endif;?>
                                     <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <!-- <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li> -->
                                        <!-- <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li> -->
                                        <li><a href="../index.php" class="dropdown-item"><i class="fas fa-home"></i> Main Page</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="../logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 page-header">
                            <div class="page-pretitle">Overview</div>
                            <h2 class="page-title">Users Details</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="teal fas fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Total Users</p>
                                                <span class="number">

                                            <?php 

                                            include_once(ROOT_PATH . "/app/database/connect.php");

                                            $query = "SELECT id FROM users ORDER BY id";
                                            $query_run = mysqli_query($conn, $query);
                                            $row = mysqli_num_rows($query_run);

                                            echo '<center><h5> '.$row.'</h5></center>';
                                            ?>

                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <a href="users.php" class="stats">
                                            <i class="fas fa-calendar"></i> Get Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="violet fas fa-eye"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Page views</p>
                                                <span class="number">28,210</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-stopwatch"></i> For this Month
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                

                    <div class="col-md-12 col-lg-12">
                        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#add">+ Add Admin/User</a>

                        <?php include(ROOT_PATH . '/app/helpers/messages.php'); ?> 

                            <div class="card">
                                <div class="card-header">User Details</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <table class="table table-hover" id="dataTables-example" width="100%">
                                    <thead>
                            <th>SN</th>
                            <th>Username</th>
                            <th>Admin = 1<br>User = 0</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                                        <tbody>
                            <?php foreach ($admin_users as $key => $user): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $user['username']; ?></td>
                                    <td><?php echo $user['admin']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-primary">edit</a></td>
                                    <td><a href="users.php?delete_id=<?php echo $user['id']; ?>" class="btn btn-danger">delete</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>


<!-- Modal Add Admin/User -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

<form action="users.php" method="post">
    <div>
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>" class="form-control">
    </div>
    <div>
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>" class="form-control">
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $password; ?>" class="form-control">
    </div>
    <div>
        <label>Password Confirmation</label>
        <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="form-control">
    </div>
    <div>
        <?php if (isset($admin) && $admin == 1): ?>
            <label>
                <input type="checkbox" name="admin" checked >
                Admin
            </label>
        <?php else: ?>
            <label>
                <input type="checkbox" name="admin" checked >
                Admin
            </label>
        <?php endif; ?>
        
    </div><br>

    <div>
        <button type="submit" name="create-admin" class="btn btn-block btn-primary">Add User</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

    </div>
</form>
      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/datatables/datatables.min.js"></script>
<script src="assets/js/initiate-datatables.js"></script>
<script src="assets/vendor/chartsjs/Chart.min.js"></script>
<script src="assets/js/dashboard-charts.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>
