<?php
require('functions.php');
session_start();

?>
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
            <a href="add_author.php" class="dropdown-item">Add New Authors</a>
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
        <div class="col-md-3">
          <div class="card bg-light" style="width:300px">
            <div class="card-header">Register User:</div>
            <div class="card-body">
              <p class="card-text">No. of total users: <?php echo getUserCount(); ?></p>
              <a href="regusers.php" class="btn btn-danger" target="_blank">View Registerd Users</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-light" style="width:300px">
            <div class="card-header">Register Books:</div>
            <div class="card-body">
              <p class="card-text">No. of total Books: <?php echo getBookCount(); ?></p>
              <a href="regbooks.php" class="btn btn-primary" target="_blank">View Registerd Books</a>
            </div>
        </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-light" style="width:300px">
            <div class="card-header">Register Categories:</div>
            <div class="card-body">
              <p class="card-text">No. of books's categories: <?php echo getBookCategories(); ?></p>
              <a href="regcat.php" class="btn btn-info" target="_blank">View Categories</a>
            </div>
        </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-light" style="width:300px">
            <div class="card-header">Register Authors:</div>
            <div class="card-body">
              <p class="card-text">No. of availabel authors: <?php echo getAuthorCount(); ?></p>
              <a href="regauth.php" class="btn btn-warning" target="_blank">View Authors</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-light" style="width:300px">
            <div class="card-header">Issued Books:</div>
            <div class="card-body">
              <p class="card-text">No. of issued books: <?php echo getBookIssue(); ?></p>
              <a href="view_issued_book.php" class="btn btn-success" target="_blank">View Issued Books</a>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>