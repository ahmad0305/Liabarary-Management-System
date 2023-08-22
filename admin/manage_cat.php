<?php
require('functions.php');
session_start();

?>
<!-- <script>
    alert("Registration Successfilly ..... You may login");
    window.location.href = "admin_dashboard.php";
</script> -->


<!doctype html>
<html lang="en">
  <head>
  <head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <style>
        #side_bar{
            background-color:whitesmoke;
            padding:50px;
            width: 300px;
            height:450px;
        }
    </style>
</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">Library Management System (LMS)</a>
			</div>
            <font style="color:white">	<span><strong>Welcome: <?php echo $_SESSION['name']; ?></strong></span></font>
            <font style="color:white">	<span><strong>Welcome: <?php echo $_SESSION['email']; ?></strong></span></font>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">My Profile</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="view_pofile.php">View Profile</a>
                    <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
                    <a class="dropdown-item" href="chage_password.php">Change Password</a>
                </div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link"  href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav></br>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#e3f2fd">
		<div class="container-fluid">
			<ul class="nav navbar-nav navbar-center">
        <li class="nav-item"><a href="admin_dashboard.php" class="nav-link">Dashboard</a></li>
        <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
          <div class="dropdown-menu">
            <a href="add_book.php" class="dropdown-item">Add New Book</a>
            <a href="manage_book.php" class="dropdown-item">Manage Book</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
          <div class="dropdown-menu">
            <a href="add_cat.php" class="dropdown-item">Add New Category</a>
            <a href="manage_cat.php" class="dropdown-item">Manage Category</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
          <div class="dropdown-menu">
            <a href="add_cat.php" class="dropdown-item">Add New Authors</a>
            <a href="manage_author.php" class="dropdown-item">Manage Authors</a>
          </div>
        </li>
        <li class="nav-item">
          <a href="issue_book.php" class="nav-link">Issu Book</a></li>

      </ul>
		</div>
	</nav>
    <span>
        <marquee behavior="" direction="">This is liabrary Management System. Liabrary open at 8:00 AM and close at 12:00 PM</marquee>
    </span>
    <br>
    <br>
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <table class="table table-bordered table-hover">
               <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>                    
                    <td>Action</td>
                </tr>
               </thead>
               <?php
               $con = mysqli_connect("localhost", "root", "", "lms");
               $select_sql = "select * from category";
               $res = mysqli_query($con,$select_sql);
               while ($row = mysqli_fetch_assoc($res)) {
                ?>
                <tr>
                    <td><?php echo $row['cat_id'] ?></td>
                    <td><?php echo $row['cat_name'] ?></td>                    
                    <td>
                        <button class="btn" name=""><a href="edit_cat.php?cid=<?php echo $row['cat_id'] ?>">Edit</a></button>
                        <button class="btn" name=""><a href="delete_cat.php?cid=<?php echo $row['cat_id'] ?>">Delete</a></button>
                    </td>
               </tr>
                <?php
               }
               ?>
        </table>
    </div>
    <div class="col-md-2"></div>
    </div>
    </body>
    </html>
    
