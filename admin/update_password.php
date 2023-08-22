<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "lms");
$password="";
$selct_query = "select * from admin where email='$_SESSION[email]'";
$res = mysqli_query($con,$selct_query);
while($row= mysqli_fetch_assoc($res)){
    $password = $row['password'];
}
if($password == $_POST['old_password']){
    $update_query ="update admin set password='$_POST[new_password]' where email='$_SESSION[email]'";
    $res = mysqli_query($con,$update_query);
} else if($password !== $_POST['old_password']){
    ?>
    <script>
    alert("Please Enter Currect Password");
    window.location.href = "update_password.php";
</script>
<?php
}
?>
<script>
    alert("Password Updated Successfilly....");
    window.location.href = "admin_dashboard.php";
</script>