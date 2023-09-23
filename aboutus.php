
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

          .center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
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
            <h1 align="center"><b>ABOUT US</b></h1>
            </div>
            
          </div>
            
     </div> 

     <section>

<div class="container">
  <div class="row" >
  <div class="col-md-12" >
  <h1> Developed  by </h1>
  <hr>

  

  <div class="col-md-2" class="center" style=" align:center; margin:10px; border:solid green;background-color:white; align:center; border-radius:20px;">
    <img src="images/deep1.jpg" class="img-circle" alt="Cinque Terre" width="150" height="170" style="margin-left:5px; margin-top:5px;"> 
    <h5>Deepak Kumar</h5>
    
    <a href="https://www.linkedin.com/in/deepak-kumar-2080121b4/">Linkedin</a>  <br>

    <a href="https://www.instagram.com/_deepak_kumar24/">Instagram</a>

    <a href="https://www.facebook.com/profile.php?id=100012544154983">facebook</a>


  </div>
   

  
  
</section>

    
       <br>
      
    <?php
        include("include/marquee.php");
        include("include/footer.php");

    ?>

</html>
