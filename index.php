<?php 
  require("include/connection.php")
?>

  <?php
             $sql = "(SELECT `id`,`ricepriceapl`, `ricepricebpl`, `sugarpriceapl`, `sugarpricebpl`, `weathpriceapl`,
                `weathpricbpl` FROM `price`)";
                  $result = mysqli_query($con, $sql);
                while($row=mysqli_fetch_array($result)){
                 
                  $r1=$row['ricepriceapl'];
                  $r2=$row['ricepricebpl'];

                  $s1=$row['sugarpriceapl'];
                  $s2=$row['sugarpricebpl'];
                 $w1= $row['weathpriceapl']; 
                 $w2= $row['weathpricbpl']; 

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
            <a class="navbar-brand" href="#" style="font-size:25px">
            <div class="col-xs-16"><b>RATION MANAGEMENT SYSTEM</b></div>
             </a>
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
            <h1 align="center"><b>RATION MANAGEMENT SYSTEM</b></h1>
            </div>
            
          </div>
            
     </div> 


          
    <div class="notification">
        <marquee behavior="move" direction="left">
          <?php
             $sql = "(SELECT notice FROM notification)";
             $result = mysqli_query($con, $sql);
             while($row=mysqli_fetch_array($result)){
            echo $row['notice'];
             ?>
            <?php
            }
          ?>

         <!--The govt. can effect change in rates and scales any time which shall be made public by publishing in the newspaper and online website. The ration card holder can also contact Assistant  Director of T.S.O. of consumer affairs and public distribution for seeking any information.-->

       </marquee>
    </div> 



        <div style="margin-bottom:10px;"> 

                  <section>

                    <div class="container">
                      <div class="row">

                          <div class="col-md-12" style="background-color:white; color: blue; margin-botttom:5px; border-radius:10px;">
                            <?php
                              date_default_timezone_set("Asia/Calcutta");
                              $zone=  date_default_timezone_get() ;
                              $time = date("H:i:s");
                              $date = date('Y/m/d');
                              echo"Time :"; echo$time;

                              
                        ?>
                      <br>
                        <?php
                            echo "Date:"; echo$date;
                        ?>
                          <h4 style="margin-top:5px;">  TODAY PRICE  </h4><hr>
                                      
                            <div class="col-md-4">
                                <div class="card" style="width: 30rem; margin-left:0px; ">
                                  <img class="card-img-top" src="images/rice.jpg"class="img" alt="Card image cap" width="250">
                                  <div class="card-body">
                                      <h5 align="center" class="card-title"  style="color:green;"> RICE PRICE</h5>
                                            <hr>
                                        APL PRICE :       <?php echo $r1 ; ?> 
                                          <HR>
                                          BPL PRICE :  <?php echo $r2; ?>    
                                  </div>
                              </div>
                  
                            </div>

                    
                                <div class="col-md-4">
                                    
                                    <div class="card" style="width: 30rem; margin-left:0px;">
                                        <img class="card-img-top" src="images/sugar2.jpg" alt="Card image cap" class="img" width="240">
                                        <div class="card-body">
                                            <h5  align="center"class="card-title" style="color:green;">SUGAR PRICE</h5>
                                              <hr>
                                                APL PRICE :   <?php echo $s1; ?> <HR>
                                                BPL PRICE :  <?php echo $s2; ?>
                                      </div>
                                    </div>
                                    
                                    
                                </div>

                    
                                    <div class="col-md-4">
                                      <div class="card" style="width:30rem;margin-left:0px;margin-bottom:5px; ">
                                        <img class="card-img-top" src="images/2.jpeg" alt="Card image cap" width="250">
                                        <div class="card-body">
                                          <h5  align="center" class="card-title"  style="color:green;">WHEAT PRICE</h5><hr>
                                              APL PRICE :  <?php  echo $w1; ?><HR>
                                                BPL PRICE :   <?php echo $w2; ?>
                                        </div>
                                      </div>
                                    </div>

                        </div>

                      </div>
                    </div>
                </section>
      </div>  

              <?php
                        }
              ?>


       <section>
               <div class="container">
                  <div class="row" style="background-color:white; border-radius:10px;">
                    <div class="col-md-6"> 
                            
                      <div class="slider">
                       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        
                         <ol class="carousel-indicators">
                           <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                           <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                           <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                         </ol>
                       
                        
                         <div class="carousel-inner" role="listbox" height="100%"; width="100%">
                           <div class="item active">
                             <img src="images/grains.jpg" alt="grains" width="100%" height="630px" >
                             <div class="carousel-caption">
                              
                             </div>
                           </div>
                           <div class="item">
                             <img src="images/1.jpg" alt="..." width="100%" height="450px">
                             <div class="carousel-caption">
                              
                             </div>
                           </div>

                           <div class="item">
                              <img src="images/rice.jpg" alt="..." width="100%" height="100%">
                              <div class="carousel-caption">
                              
                              </div>
                            </div>
                          
                         </div>
                       
                        
                         <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                         </a>
                         <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                         </a>
                       </div>  
                      </div>
                      
                    </div>  

                      <div class="col-md-6"> 
                          
                        <div class="form">
                
                          <h2 align="center" style="" >LOGIN</h2><hr>

                            <form action="dlogincheck.php" method="POST">

                              <div class="form-group">
                                 <br>
                                <label for="user">username:</label>
                                <input type="text" class="form-control" name="user">
                              </div>

                            <br>
                              <div class="form-group" >
                                <label for="pass">Password:</label>
                                <input type="password" class="form-control" name="pass">
                              </div>

                              <br>

                              <button type="submit" class="btn btn-lg btn-primary btn-block" name="submit">login</button>
                              <br>
                            </form>
                            

                        </div>

    
                      </div>  

                  </div> 
               </div>
       
       </section>


       <section>
                                    
                                    <div class="row" style="margin-top:10px; margin-bottom:0px;">
                                     <div class="col-md-4">
                                       <div class="thumbnail">
                                         <a href="images/rice.jpg">
                                           <img src="images/rice.jpg" alt="" style="width:100%">
                                           <div class="caption">
                                             <p>RICE </p>
                                           </div>
                                         </a>
                                       </div>
                                     </div>
                                     <div class="col-md-4">
                                       <div class="thumbnail">
                                         <a href="images/grains.jpg">
                                           <img src="images/grains.jpg" alt="" style="width:100%">
                                           <div class="caption">
                                             <p>GRAINS</p>
                                           </div>
                                         </a>
                                       </div>
                                     </div>
                                     <div class="col-md-4">
                                       <div class="thumbnail">
                                         <a href="images/sugar1.jpg">
                                           <img src="images/sugar1.jpg" alt="" style="width:90%">
                                           <div class="caption">
                                             <p>SUGAR</p>
                                           </div>
                                         </a>
                                       </div>
                                     </div>
                                   </div>


    </section>

       <br>

      
  
    <?php
        include("include/marquee.php");
        include("include/footer.php");

    ?>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
         

      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      
        <script src="js/bootstrap.min.js"></script>

</html>
