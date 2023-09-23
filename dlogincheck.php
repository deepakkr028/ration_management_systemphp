<?php 
  require("include/connection.php")
?>
<?php
  if(isset($_POST['submit'])){
    $username=$_POST['user'];
    $password=$_POST['pass'];

    $sql="(select * from register where user='$username'and pass='$password') ";
    $query =mysqli_query($con,$sql);

    $row = mysqli_num_rows($query);
        if($row ){
            $_SESSION['user']=$username;
            
            echo"<script>window.alert(\"logged in sucessfully!\");</script>";
            header('refresh:0 url=delear.php');
            //header('location:delear.php');
        }else{           
            echo"<script>window.alert(\"login failed!\");</script>";
           header('refresh:0 url=index.php');
             }
  }
?>