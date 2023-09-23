<?php 
  require("include/connection.php");
?>

<?php
    $dd=$_GET['id'];
    $sql="DELETE FROM `delearstock` WHERE id = $dd";
    mysqli_query($con,$sql);
    header("location:viewdealerstock.php");
?>
