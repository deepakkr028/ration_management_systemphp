<?php 
  require("../include/connection.php");
  require("../include/restrictadmin.php");
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
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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

                          <a href="adminmain.php" class="list-group-item"><i class="fa fa-user-circle-o" aria-hidden="true"></i> DELEARS LIST</a>

                          <a href="comments.php" class="list-group-item"> <i class="fa fa-comment" aria-hidden="true"></i> COMMENTS</a>
                          <a href="member.php" class="list-group-item"><i class="fa fa-list" aria-hidden="true"></i> RATION MEMBER LIST</a>

                    </div>


                  </div>

                  <div class="col-md-8" style="">
                    
                        <div class="col-md-9">
                            <h1><i class="fa fa-usd" aria-hidden="true"></i> TODAY PRICE</h1><hr>
                            <ol class="breadcrumb">
                                <li><a href="adminmain.php"> <i class="fa fa-tachometer" aria-hidden="true"></i> ADMIN PANEL </a></li>
                              <li class="active"><i class="fa fa-usd" aria-hidden="true"></i> TODAY PRICE</li>
                            </ol>

                              <div class="form-reg">
                                    <form action="" method="POST">
                                      <H5 ALIGN="CENTER"> <b>TODAY PRICE</b></H5>
                                        <HR>
                                        <div class="form-group">
                                              <label for="ricepriceapl">Rice Price for APL:</label>
                                              <input type="text" class="form-control" name="ricepriceapl" autocomplete="off">
                                      </div>

                                          <div class="form-group">
                                            <label for="ricepricebpl">Rice Price for BPL:</label>
                                            <input type="text" class="form-control" name="ricepricebpl" autocomplete="off">
                                          </div>

                                        <div class="form-group">
                                            <label for="sugarpriceapl">SUGAR Price for APL:</label>
                                            <input type="text" class="form-control" name="sugarpriceapl" autocomplete="off">
                                        </div>

                                          <div class="form-group">
                                            <label for="sugarpricebpl">SUGAR Price for BPL:</label>
                                            <input type="text" class="form-control" name="sugarpricebpl" autocomplete="off">
                                          </div>                  
                                          
                                          
                                          <div class="form-group">
                                            <label for="weathpriceapl">WHEAT Price for APL:</label>
                                            <input type="text" class="form-control" name="weathpriceapl" autocomplete="off">
                                          </div>
                                          
                                          <div class="form-group">
                                            <label for="weathpricbpl">WHEAT Price for BPL:</label>
                                            <input type="text" class="form-control" name="weathpricbpl" autocomplete="off">
                                          </div>
                                        
                                        <br>
                                        <button type="submit"  name="submit" class="btn btn-sucess" style="margin-left:40px"> ADD PRICE</button>

                                    </form>

                                    <?Php

                                      if(isset($_POST['submit']))
                                        {
                                            
                                            $ricepriceapl =$_POST['ricepriceapl'];
                                            $ricepricebpl =$_POST['ricepricebpl'];
                                            $sugarpriceapl =$_POST['sugarpriceapl'];
                                            $sugarpricebpl =$_POST['sugarpricebpl'];
                                            $weathpriceapl =$_POST['weathpriceapl'];
                                            $weathpricbpl =$_POST['weathpricbpl'];
                                                                    
                                            $sql= "INSERT INTO `price`( `ricepriceapl`, `ricepricebpl`, `sugarpriceapl`,
                                              `sugarpricebpl`,`weathpriceapl`, `weathpricbpl`) 
                                            VALUES ('$ricepriceapl','$ricepricebpl','$sugarpriceapl','$sugarpriceapl',
                                            '$weathpriceapl','$weathpricbpl')";
                                              $query= mysqli_query($con,$sql); 

                                            if($query){
                                              echo"<script>window.alert(\"price added  sucessfully!\");</script>";  

                                            }else{
                                              echo"error:";
                                            }

                                          }

                                  ?>
                                  
                          </div>

                      </div> 
                        
                  </div>
              </div>
            
            </section>
   
            <?php
              include("..//include/footer.php");
            ?>
  </body>
</html>
