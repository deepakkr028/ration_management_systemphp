<?php 
  require("../include/connection.php");
?>

<?php
    $dd=$_GET['id'];
    $sql="DELETE FROM comment WHERE id = $dd ";
    mysqli_query($con,$sql);
    header("location:comments.php");
?>
