<?php
    $con = mysqli_connect("localhost", "root", "", "lms");
    $delete = "delete from books where book_no = $_GET[bn]";
    $query=mysqli_query($con, $delete);
?>
<script>
    alert("Book Deleted");
    window.location.href='manage_book.php'; 
</script>