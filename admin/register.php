<?php

$con = mysqli_connect("localhost", "root", "", "lms");
if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $mobile =$_POST['mobile'];
    $insert_sql = "INSERT INTO `admin` (name, email, password, mobile) VALUES ('$name', '$email', '$password', '$mobile')";
     $res = mysqli_query($con,$insert_sql);
}
?>
<script>
    alert("Registration Successfilly ..... You may login");
    window.location.href = "index.php";
</script>
