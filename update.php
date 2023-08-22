<?php
$con = mysqli_connect("localhost", "root", "", "lms");
$update_query ="update user set name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]',address='$_POST[address]'";
$res = mysqli_query($con,$update_query);
?>
<script>
    alert("Updated Successfilly ....");
    window.location.href = "user_dashboard.php";
</script>