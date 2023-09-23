
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
      <nav class="navbar navbar-default" >
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" style="font-size:25px"><b>RATION MANAGEMENT SYSTEM</b></a>
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
          <div id="head" class="animated fadeInLeft">
            <h1 align="center"><b>HELP</b></h1>
            </div>
            
          </div>
            
     </div> 

     <div class="container">
          <div class="row">
            <div class="col-md-12" style="">
              <h1>  How To use?</h1>
              <hr>
              <h3 align="left"> step 1:</h3>
              <img src="images/homepage.png" alt="" width="400px" height="200px" style="border:solid red;">
             <p style="font-size:25px;"> In the homepage dealer login with their username and password. </p>
              <hr>
             <h3 align="left"> step2:</h3>
            
             <img src="images/main.png" alt="" width="400px" height="200px" style="border:solid red;">
             <P style="font-size:25px;">Then the dealer dashboard open,where dealer add ration member,deleate ,modify,deliver ration to customer,view customer details and add their stock details.
             when the dealer enter ration card number and select card type then the next page open  </p>
                        <hr>
              <h3 align="left"> step3:</h3>
              <img src="images/d1.png" alt="" width="400px" height="200px" style="border:solid red;">
              <img src="images/d2.png" alt="" width="400px" height="200px" style="border:solid red; margin-top:3px;">
              <p style="font-size:25px;">then customer details open ,where captche verification has happen.then the next page open.</p>
              <hr>
             <h3 align="left"> step4:</h3>
             <img src="images/r.png" alt="" width="400px" height="200px" style="border:solid red;">
             <p style="font-size:25px;"> Here delear select amount,weight,price then the automatic calculation happen. total amount is show. </p>
              
              </div>
          </div>
     
     </div>

       <br>
      
        <?php
            include("include/marquee.php");
            include("include/footer.php");
      ?>
  </body>
</html>
