<?php 
  require("../include/connection.php");
  require("../include/restrictadmin.php");
?>

 <?php

     $dd=$_GET['id'];
     $sql="SELECT * FROM register WHERE id = $dd ";
     $result= mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($result)){
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
        
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>E-RATION</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">
      
       <link rel="stylesheet" href="style.css">

          <style type="text/css">
              body{
                background-color:lightblue;
              }

          </style>
      
  </head>

  <body>

     <nav class="navbar navbar-default ">
        <div class="container-fluid">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="font-size:25px ;color:blue;"><b><i class="fa fa-tachometer" aria-hidden="true"></i> ADMIN PANEL</b></a>
          
            <h4 align="left" style="margin-left:220px; color:red;" >
                    welcome
                        <?php 
                        echo$_SESSION['user']
                          ?>   
           </h4>

          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <ul class="nav navbar-nav navbar-right">

               <li><a href="logout.php" ><b>  <i class="fa fa-sign-out" aria-hidden="true"></i> logout </a></li>
            
           </ul>
          </div>
        </div>
   </nav> 
         <section>
              <div class="row">
                  <div class="col-md-3"style="margin:10px;">

                    <div class="list-group">
                        <a href="#" class="list-group-item active"> <i class="fa fa-tachometer" aria-hidden="true"></i> ADMIN PANEL</a>

                        <a href="adddealer.php" class="list-group-item"> <i class="fa fa-registered" aria-hidden="true"></i> REGISTER DEALERS</a>

                        <a href="notification.php" class="list-group-item"><i class="fa fa-flag-checkered" aria-hidden="true"></i> NOTIFICATION</a>
                        <a href="notificationsettig.php" class="list-group-item"><i class="fa fa-flag-checkered" aria-hidden="true"></i> <i class="fa fa-cog" aria-hidden="true"></i> NOTIFICATION SETTING</a>
                        <a href="price.php" class="list-group-item"><i class="fa fa-usd" aria-hidden="true"></i> PRICE</a>
                        <a href="pricesetting.php" class="list-group-item"> <i class="fa fa-eye" aria-hidden="true"></i> <i class="fa fa-usd" aria-hidden="true"></i> VIEW PRICE </a>

                        <a href="adminmain.php" class="list-group-item"><i class="fa fa-user-circle-o" aria-hidden="true"></i> DEALERS LIST</a>

                        <a href="comments.php" class="list-group-item"> <i class="fa fa-comment" aria-hidden="true"></i> COMMENTS</a>
                        <a href="member.php" class="list-group-item"><i class="fa fa-list" aria-hidden="true"></i> RATION MEMBER LIST</a>

                      </div>


                  </div>

                  <div class="col-md-8" style="">
                  
                    <div class="col-md-9">
                      <h1> <i class="fa fa-user-circle-o" aria-hidden="true"></i>   UPDATE DELEAR </h1><hr>
                      <ol class="breadcrumb">
                          <li><a href="adminmain.php"><i class="fa fa-tachometer" aria-hidden="true"></i> ADMIN PANEL</a></li>
                        <li class="active"> <i class="fa fa-user-circle-o" aria-hidden="true"></i> UPDATE DEALER</li>
                      </ol>

                      <div class="form-reg">
                        <h2 align="center"> UPDATE DELALER </h2><hr>
        
                          <form action="" method="POST">
                                  <div class="form-group">
                                        <label for="nam">Name:</label>
                                        <input type="text" class="form-control" name="nam" value="<?php echo $row['nam']; ?>">
                                </div>
        
                                      <div class="form-group">
                                            <label for="parentage">PARENTAGE:</label>
                                            <input type="text" class="form-control" name="parentage" value=" <?php echo $row['parentage']; ?>">
                                    </div>
                                      
                                    <div class="form-group">
                                      <label for="mobileno">MOBILE NO:</label>
                                        <input type="number" class="form-control" name="mobileno" value="<?php echo $row['mobileno']; ?>">
                                    </div>
                                        
                                  
                                      <div class="form-group">
                                            <label for="adress">Address:</label>
                                            <input type="text" class="form-control" name="adress" value=" <?php echo $row['adress']; ?>">
                                      </div>
        
                                          <div class="form-group">
                                                <label for="licenceno">Licence no:</label>
                                                <input type="text" class="form-control" name="licenceno" value="<?php echo $row['licenceno']; ?>">
                                        </div>
                                                    <hr>
        
                                              <div class="form-group">
                                                    <label for="user">Username:</label>
                                                    <input type="text" class="form-control" name="user" value="<?php echo $row['user']; ?>">
                                            </div>

                                                  <div class="form-group">
                                                    <label for="pass">Password:</label>
                                                    <input type="password" class="form-control" name="pass">
                                                  </div>

                                                <?php
                                                  }
                                                ?>
                                                        <hr>       
                                    <button type="submit" class="btn btn-sucess" name="submitu">UPDATE DELEAR</button>
                          </form>

                        <?php
                            if(isset($_POST['submitu']))
                            {
                              $dd=$_GET['id'];
                              $nam =$_POST['nam'];
                              $parentage =$_POST['parentage'];
                              $mobileno =$_POST['mobileno'];
                              $adress =$_POST['adress'];
                              $licenceno =$_POST['licenceno'];
                              $user =$_POST['user'];
                              $pass =$_POST['pass'];             
                              
                              $sql="UPDATE `register` SET `nam`='$nam',`parentage`='$parentage',`mobileno`='$mobileno',`adress`='$adress' 
                              ,`licenceno`='$licenceno',`user`='$user',`pass`='$pass' WHERE id= $dd ";
                              $result= mysqli_query($con,$sql);

                              if($result ){
                                echo"<script>window.alert(\"update sucess!\");</script>";
                              }else{    
                              echo"<script>window.alert(\"update failed!\");</script>";       
                              }

                          }
                      ?>

                    </div>                
                  </div>
              </div>
         </section>
   
            <?php
             include("..//include/footer.php");
           ?>
           
  </body>
</html>
