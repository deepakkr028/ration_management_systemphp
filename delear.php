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
              <li> <a href="dlogout.php" ><b><i class="fa fa-sign-out" aria-hidden="true"></i>logout</b></a>  </li>


            </ul>
          </div>
        </div>
      </nav> 

    <section>
          <div class="container">
                <div class="row">
                    <div class="col-md-12">
                                  
                
                            <div class="delardetail">
                                <label for="delarname">Delar Name:</label>
                                <input type="text" class="form-control" name="nam" value="<?php 
                                    $username = $_SESSION['user'];
                                    $sql = "(SELECT nam FROM register WHERE user = '$username')";
                                    $result = mysqli_query($con,$sql);
                                          while($row=mysqli_fetch_assoc($result)){
                                            echo ($row['nam']);
                                          }
                                            ?> ">
                              
                                
                        
                                <label for="licenceno">Licence no.:</label>
                                  <input type="text" class="form-control" name="licenceno" value="<?php 
                                              $username = $_SESSION['user'];
                                              $sql = "(SELECT licenceno FROM register WHERE user = '$username')";
                                              $result = mysqli_query($con,$sql);
                                                while($row=mysqli_fetch_assoc($result)){
                                                  echo ($row['licenceno']);
                                                }
                                              ?> ">


                              </div>  
                                      </div>

                            </div>
                   </div>
               </div>
         </div>
   </section>
                                  
     <section> 
          <div class="container">
                  <div class="row"> 
                        <div class="col-md-3"style="margin:10px;"> 

                              <div class="list-group">
                                          <a href="" class="list-group-item active"><i class="fa fa-tachometer" aria-hidden="true"></i> delear </a>
                                          <a href="addcustomer.php" class="list-group-item"> <i class="fa fa-registered" aria-hidden="true"></i> ADD NEW CUSTOMER</a>
                                          <a href="rationmember.php" class="list-group-item"> <i class="fa fa-list-alt" aria-hidden="true"></i> RATION HOLDER LIST</a>
                                          <a href="delearstock.php" class="list-group-item"> <i class="fa fa-stack-exchange" aria-hidden="true"></i>  DEALER ADD STOCK DETAILS </a>
                                          <a href="viewdealerstock.php" class="list-group-item"> <i class="fa fa-eye" aria-hidden="true"></i> <i class="fa fa-stack-exchange" aria-hidden="true"></i>  DEALER VIEW STOCK DETAILS </a>
                                          <a href="memberstock.php" class="list-group-item"> <i class="fa fa-eye" aria-hidden="true"></i>  <i class="fa fa-registered" aria-hidden="true"></i> <i class="fa fa-stack-exchange" aria-hidden="true"></i> RATION MEMBER STOCKS </a>
                              </div>
                        </div> 

                              <div class="col-md-5" style=""> 
                                          <div class="catagory">
                                              <form action="rasionholder.php" method="POST">
                                                  <h1 style="margin-left:-105px;"> <b>CARDTYPE:</b> </h1>
                                                  <h2 style="margin-left:200px;"> <input type="radio" name="cardtype" value="apl" checked > APL</h2>
                                                  <h2 style="margin-left:200px;"><input type="radio" name="cardtype" value="bpl"> BPL</h2>
                                                  <h3><b>Ration card no. :</b>

                                                  <div class="form-group">
                                                    <label for="rationcardnumber"></label>
                                                    <input type="text" class="form-control" name="rationcardnumber">
                                                  </div>

                            
                                                  <h3 align="center">
                                                  <input type="submit" name="search" value="Submit">
                                                  </h3>
                                              </form>
                                        </div> 

                              </div> 
                                  
                              <div class="col-md-3">
                                    <div class="thumbnail" style="margin-top:10px;">
                                      <img class="img-responsive"  src="images/2.jpeg" alt=" "style="width:300px;height:390px">
                                    </div>   
                                </div>

                              </div>
                              
                </div> 
        </div>
     </section> 

         <section>
                                        <div class="row">
                                  <div class="col-md-4">
                                    <div class="thumbnail">
                                  
                                        <img src="images/rice.jpg" alt="" style="width:100%">
                                        <div class="caption">
                                          <p>RICE</p>
                                        </div>
                                      
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="thumbnail">
                                    
                                        <img src="images/grains.jpg" alt="" style="width:100%">
                                        <div class="caption">
                                          <p>GRAINS</p>
                                        </div>
                                    
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="thumbnail">
                                      
                                        <img src="images/sugar1.jpg" alt="" style="width:90%">
                                        <div class="caption">
                                          <p>SUGAR</p>
                                        </div>
                                    
                                    </div>
                                  </div>
                                </div>



       </section>

                  <?php 
                    include("include/marquee.php");
                  ?>

        <?php
         include("include/footer.php");
      ?>
        
        
  </body>
</html>
