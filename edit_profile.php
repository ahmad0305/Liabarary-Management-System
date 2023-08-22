<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "lms");
$name="";
$email="";
$mobile="";
$address="";
$select_sql = "select * from user where email = '$_SESSION[email]'";
$res = mysqli_query($con,$select_sql);
while ($row = mysqli_fetch_assoc($res)) {
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $address=$row['address'];
}
?>
<!doctype html>
<html lang="en">
  <head>
  <head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
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
				<a class="navbar-brand" href="user_dashboard.php">Library Management System (LMS)</a>
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
		        <a class="nav-link"  href="logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav>
    <br>
    <span>
        <marquee behavior="" direction="">This is liabrary Management System. Liabrary open at 8:00 AM and close at 12:00 PM</marquee>
    </span>
    <br>
    <br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="update.php" method="post">
                <div class="form-group">
                    <label for="">Name:</label>
                    <input type="text" class="form-control" value="<?php echo $name; ?>" name="name">
                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="text" class="form-control" value="<?php echo $email; ?>" name="email">
                </div>
                <div class="form-group">
                    <label for="">MObile:</label>
                    <input type="tel" class="form-control" value="<?php echo $mobile; ?>" name="mobile">
                </div>
                <div class="form-group">
                    <label for="">Address:</label>
                    <textarea cols="30" rows="3" class="form-control" name="address"><?php echo $address; ?></textarea>
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
  </body>
</html>