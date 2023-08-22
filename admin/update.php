<?php
$con = mysqli_connect("localhost", "root", "", "lms");
$update_query ="update admin set name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]'";
$res = mysqli_query($con,$update_query);
?>
<script>
    alert("Updated Successfilly ....");
    window.location.href = "admin_dashboard.php";
</script>