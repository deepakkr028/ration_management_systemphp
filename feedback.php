<?php 
  require("include/connection.php");
  require("include/restrictdelear.php");
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

       <link rel="stylesheet" href="css/animated.css">

        <style type="text/css">
          body{
            background-image:url(images/banner.jpg");
          }

          .jumbotron{
            background-image:url("images/jumbo2.jpg");
          }
       </style>
      
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  </head>

  <body>
      
      <nav class="navbar navbar-default">
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
             <li><a href="index.php" style="black"><b> <i class="fa fa-home" aria-hidden="true"></i> HOME</b></a></li>
              <li><a href="aboutus.php"><b> <i class="fa fa-info-circle" aria-hidden="true"></i> About us</b></a></li>
              <li><a href="help.php"><b> <i class="fa fa-question-circle" aria-hidden="true"></i>Help</b> </a></li>
              <li><a href=feedback.php><b> <i class="fa fa-commenting" aria-hidden="true"></i> Feedback</b> </a></li>
            
            </ul>
          </div>
        </div>
      </nav>  
      
       <div class="jumbotron">
        <div class="container">
          <div id="head" class="animated fadeInLeft">
          <h1 align="center"><b>RATION MANAGEMENT Feedback</b></h1>
              <P align="center">"please use the form below to send us your comments and feedback.we apriciate you taking the time to provides us with your views so that we can best meet the need of users."</P>
            </div>
            
          </div>
            
    </div> 
     
      <div class="row">
                  <div class="col-md-6" >
                    <div class="feedback">
                    
                      <form name="comment"action="" onsubmit="return validateForm()" method="POST">
                        <div class="form-group">
                          <label for="nam">Name:</label>
                          <input type="name" class="form-control" name="nam" required>
                        </div>

                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" required>
                          </div>

                          <b>enter your comment:</b>
                          <textarea name="comments" cols="40" rows="6" style="margin-bottom: 10px;" required>
                          </textarea>
                          <br>
                      
                        <button type="submit"  name="submit" class="btn btn-sucess" style="margin-left:40px">submit</button>


                      </form>
                    </div>
                    
                    <?Php
                      if(isset($_POST['submit']))
                      {
                        $nam =$_POST['nam'];
                        $email =$_POST['email'];
                        $comments =$_POST['comments'];
                          
                            $sql= "INSERT INTO comment (nam,email,comments)VALUES('$nam','$email','$comments')";
                            $query= mysqli_query($con,$sql); 

                        if($query){
                          echo"<script>window.alert(\"comments add  sucessfully!\");</script>";  
                        }else{
                          echo"error:";
                        }


                      }

                    ?>

                  </div>
     </div>

      <?php
        include("include/marquee.php");
      ?>
  
       <?php
        include("include/footer.php");
       ?>
  </body>
</html>
