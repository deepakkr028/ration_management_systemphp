<?php 
    ob_start();
    require("include/connection.php");
  require("include/restrictdelear.php");
?>


<?php
    if(!isset( $_SESSION['user'])){
    header('location:index.php');
  }
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
     
       <link rel="stylesheet" href="css/style.css">

         
       <style type="text/css">
          body{
            background-image:url(images/banner.jpg");
          }

          .jumbotron{
            background-image:url("images/jumbo2.jpg");
            height:150px;
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
            <a class="navbar-brand" href="#" style="font-size:25px"><b>RATION MANAGEMENT SYSTEM</b></a>
          </div>
      
      
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
              <ul class="nav navbar-nav navbar-right">

                <li><a href="index.php"><b> <i class="fa fa-home" aria-hidden="true"></i> HOME</b></a></li>
                <li><a href="aboutus.php"><b> <i class="fa fa-info-circle" aria-hidden="true"></i> About us</b></a></li>
                <li><a href="help.php"><b> <i class="fa fa-question-circle" aria-hidden="true"></i>Help</b> </a></li>
                <li><a href=feedback.php><b> <i class="fa fa-commenting" aria-hidden="true"></i> Feedback</b> </a></li>
              
            </ul>
          </div>
        </div>
      </nav> 
      
        
    
     <div class="jumbotron">
        <div class="container">
          <div id="head">
            <h1 align="center"><b>ADD  DELEAR STOCK </b></h1>
            </div>
          </div>
     </div> 
    
      
     <section>
         <div class="container">
             <div class="row">
                         <?php 
                                    $username = $_SESSION['user'];
                                    $sql = "(SELECT * FROM register WHERE user = '$username')";
                                    $result = mysqli_query($con,$sql);
                                          while($row=mysqli_fetch_assoc($result)){
                            
                                          
                        ?>
                        
                        <div class="col-md-3">
                                            
                        </div>

                           <div class="col-md-6">
                             <div class="stock"  style="border:green;background-color:pink;margin-bottom:10px;padding:30px;">    
                                    <form action="" method="POST">
                                            <H5 ALIGN="CENTER"> <b>ADD STOCK DETAILS</b></H5>
                                              <HR>
                                              <div class="form-group">
                                                    <label for="rice">Rice :</label>
                                                    <input type="text" class="form-control" name="rice" autocomplete="off"required>
                                            </div> 

                                              <div class="form-group">
                                                  <label for="sugar">SUGAR :</label>
                                                  <input type="text" class="form-control" name="sugar" autocomplete="off"required>
                                              </div>
                                                
                                                <div class="form-group">
                                                  <label for="floar">FLOAR:</label>
                                                  <input type="text" class="form-control" name="floar" autocomplete="off"required>
                                                </div>
                                                
                                                
                                              
                                              <br>
                                              <button type="submit" name="submit" class="btn btn-sucess" style="margin-left:40px"> ADD STOCK DETAILS</button>

                                  </form>

                                          <?Php

                                            if(isset($_POST['submit']))
                                              {
                                                  $nam = $row['nam'];
                                                  $licenceno = $row['licenceno'];
                                                  $rice =$_POST['rice'];
                                                  $sugar =$_POST['sugar'];
                                                  $floar =$_POST['floar'];
                                                          
                                                  $sql= "INSERT INTO `delearstock`( `name`, `licenceno`, `rice`, `floar`, `sugar`) 
                                                  VALUES ( '$nam','$licenceno','$rice','$floar','$sugar')"; 
                                                    $query= mysqli_query($con,$sql); 

                                                  if($query){
                                                    echo"<script>window.alert(\"stock details  added  sucessfully!\");</script>";  
                                                    header('refresh:2 url=viewdealerstock.php');
                                                  }else{
                                                    echo"error:";
                                                  }

                                                }

                                        ?>



                            </div>
                         </div> 
                         
                              <div class="col-md-2">
                                                
                            </div>
                        

                 

           </div> 
       </div>
    </section>

                                      <?php
                                          }
                                     ?>

        <?php
           include("include/footer.php");
           include("include/marquee.php");
        ?>


       
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
         
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
