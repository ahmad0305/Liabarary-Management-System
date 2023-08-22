<?php
    $con = mysqli_connect("localhost", "root", "", "lms");
    $delete = "delete from authors where author_id = $_GET[aid]";
    $query=mysqli_query($con, $delete);
?>
<script>
    alert("Author Deleted");
    window.location.href='manage_author.php'; 
</script>