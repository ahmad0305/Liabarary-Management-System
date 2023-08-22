<?php
require('functions.php');
session_start();
$con = mysqli_connect("localhost", "root", "", "lms");
$author_id ="";
$author_name = "";
$select_sql = "select * from authors where author_id =$_GET[aid]";
$res = mysqli_query($con,$select_sql);
while ($row = mysqli_fetch_assoc($res)) {
    $author_id =$row['author_id'];
    $author_name =$row['author_name'];
    

}
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
	</nav><br>
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
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="" method="post">                
                <div class="form-group">
                    <label for="">Author Name:</label>
                    <input type="text" name="author_name" value="<?php echo $author_name; ?>" class="form-control" required="">
                </div>                                
                <button class="btn btn-primary" name="update">Update Author</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
  </body>
</html>
<?php
if(isset($_POST['update'])){
    $con = mysqli_connect("localhost", "root", "", "lms");
    $update = "update authors set author_name='$_POST[author_name]' where author_id = $_GET[aid]";
    $query=mysqli_query($con, $update);
    echo("<script>location.href ='manage_author.php'</script>");
    //header("location:manage_author.php");
}
?>