<?php 
  require("../include/connection.php");
?>

<?php
    $dd=$_GET['id'];
    $sql="DELETE FROM price WHERE id = $dd ";
    mysqli_query($con,$sql);
    header("location:pricesetting.php");
?>
