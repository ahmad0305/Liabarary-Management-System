<?php
    $con = mysqli_connect("localhost", "root", "", "lms");
    $delete = "delete from category where cat_id = $_GET[cid]";
    $query=mysqli_query($con, $delete);
?>
<script>
    alert("Category Deleted");
    window.location.href='manage_cat.php'; 
</script>