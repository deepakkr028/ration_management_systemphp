<?php 
  require("../include/connection.php")
?>

<?php
  if(isset($_POST['submit'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];

    $sql="(select * from admintable where user='$username'and pass='$password') ";
    $query =mysqli_query($con,$sql);

    $row = mysqli_num_rows($query);
        if($row == 1 or $row ==2 ){
          
            $_SESSION['user']=$username;
            echo "login sucess";
            echo"<script>window.alert(\"logged in  sucessfully\");</script>";
          header('location:adminmain.php');
        }else{     
           echo"login failed";
           echo"<script>window.alert(\"logged in failed\");</script>";
            header('location:admin.php');
        } 
   }
?>