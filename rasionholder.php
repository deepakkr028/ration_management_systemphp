<?php 
  require("include/connection.php");
  require("include/restrictadmin.php");
?>
     
 <?php

      if(isset($_POST['search'])){
        $cardtype =$_POST['cardtype'];
        $rationcardnumber =$_POST['rationcardnumber'];
        $sql="SELECT * FROM `addrationmember` WHERE cardtype='$cardtype' and rationcardnumber='$rationcardnumber' ";
        $result= mysqli_query($con,$sql);
        
        if($row=mysqli_fetch_array($result)){

          $_SESSION['rationcardnumber']=$rationcardnumber;
        
  

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
            
            background-image:url("images/jumbo.jpg");
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
      
     <div style="background-color:yellow;margin-top:-20px;">
          <h1 align="center" style="color:tomato;"> RATION CARD MEMBERS DETAILS</h1>
     </div>
           
     <section>
             <div class="container">
              <div class="row">

                      <div class="class-md-12">
                                  
                            <form  action="" method="POST">
                                  <table class="table" id="customers" style="">
                                                      <tr>
                                                        <th width="30px"><h4>Ration Card Head of Family Details</h4></th>
                                                    </tr>

                                                        <tr>
                                                          <td> RC Holder Name</td>
                                                          <td> <input type="text" name="nam" value="<?php echo $row['nam']; ?>" > </td>
                                                          <td> Mobile number</td>
                                                          <td> <input type="text" name="mobileno" value="<?php echo $row['mobileno'];
                                                             ?>"></td>
                                                      </tr>

                                                    <tr>
                                                      <td>Father/spouse Name</td>
                                                      <td> <input type="text" name="fname" value="<?php echo $row['fname']; ?>" ></td>

                                                      <td>Category</td>
                                                      <td> <input type="text" name="category" value="<?php echo $row['category']; ?>"> </td>

                                                    </tr>

                                                    <tr>
                                                      <td>Occupation</td>
                                                      <td><input type="text" name="occupation" value="<?php echo $row['occupation']; ?>" ></td>
                                                      <td>Old Ration Card</td>
                                                      <td> <input type="number" name="oldrationnumber" value="<?php echo $row['oldrationnumber']; ?>" > </td>
                                                  </tr>

                                                    <tr>
                                                      <td>Income</td>
                                                      <td> <input type="number" name="income" value="<?php echo $row['income']; ?>" > </td>
                                                      <td>Status</td>
                                                      <td>Active</td>
                                                    </tr>

                                                        <tr>
                                                          <th>Ration Card Details</th>
                                                      </tr>

                                                        <tr>
                                                          <td>Ration Card No.</td>
                                                          <td> <input type="number" name="rationcardnumber" value="<?php echo $row['rationcardnumber']; ?>"> </td>
                                                          <td>Card Type</td>
                                                          <td> <input type="text" name="cardtype" value="<?php echo $row['cardtype']; ?>"> </td>
                                                      </tr>
                                                        
                                                      <tr>
                                                        <td>Circle/Tehsil</td>
                                                        <td> <input type="text" name="circlet" value="<?php echo $row['circlet']; ?>"> </td>
                                                        <td>Issue Date</td>
                                                        <td><input type="date" name="issuedate" value="<?php echo $row['issuedate']; ?>" > </td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>

                                                <tr>
                                                  <th>Present Address Details</th>
                                                </tr>

                                                  <tr>
                                                    <td>House no</td>
                                                    <td> <input type="number" name="houseno" value="<?php echo $row['houseno']; ?>" > </td>
                                                    <td>Landmark</td>
                                                    <td> <input type="text" name="landmark" value="<?php echo $row['landmark']; ?>" > </td>
                                                    <td>Village/Town</td>
                                                    <td> <input type="text" name="villagetown" value="<?php echo $row['villagetown']; ?>"> </td>
                                                </tr>

                                                <tr>
                                                  <td>Tehsil</td>
                                                  <td> <input type="text" name="tehsil" value="<?php echo $row['tehsil']; ?>" > </td>
                                                  <td>District</td>
                                                  <td> <input type="text" name="district" value="<?php echo $row['district']; ?>"> </td>
                                                  <td>State</td>
                                                  <td> <input type="text" name="stat" value="<?php echo $row['stat']; ?>"> </td>
                                              </tr>

                                                <tr>
                                                  <th>Ration Card Holder Family Details</th>
                                                </tr>

                                                <tr>
                                                  <td>SI No</td>
                                                  <td>Name</td>
                                                  <td>Gender</td>
                                                  <td>Relationship</td>
                                                  <td>Age</td>
                                                  <td>Aadhar Number</td>  
                                              </tr>

                                                  <tr>
                                                      <td>1</td>
                                                      <td> <input type="text" name="ffname1" value="<?php echo $row['ffname1']; ?>"> </td>
                                                      <td> <input type="text" name="gender1" value="<?php echo $row['gender1']; ?>" > </td>
                                                      <td> <input type="text" name="relationship1" value="<?php echo $row['relationship1']; ?>" > </td>
                                                      <td> <input type="number" name="age1" value="<?php echo $row['age1']; ?>" > </td>
                                                      <td> <input type="number" name="anumber1" value="<?php echo $row['anumber1']; ?>" > </td>
                                                    
                                                </tr>

                                                <tr>
                                                  <td>2</td>
                                                  <td> <input type="text" name="ffname2" value="<?php echo $row['ffname2']; ?>"> </td>
                                                  <td> <input type="text" name="gender2" value="<?php echo $row['gender2']; ?>" > </td>
                                                  <td> <input type="text" name="relationship2" value="<?php echo $row['relationship2']; ?>" > </td>
                                                  <td> <input type="number" name="age2" value="<?php echo $row['age2']; ?>" > </td>
                                                  <td> <input type="number" name="anumber2" value="<?php echo $row['anumber2']; ?>" > </td>
                                              </tr>

                                                <tr>
                                                  <td>3</td>
                                                  <td> <input type="text" name="ffname3" value="<?php echo $row['ffname3']; ?>"> </td>
                                                  <td> <input type="text" name="gender3" value="<?php echo $row['gender3']; ?>" > </td>
                                                  <td> <input type="text" name="relationship3" value="<?php echo $row['relationship3']; ?>" > </td>
                                                  <td> <input type="number" name="age3" value="<?php echo $row['age3']; ?>" > </td>
                                                  <td> <input type="number" name="anumber3" value="<?php echo $row['anumber3']; ?>" > </td>
                                                  
                                              </tr>

                                                <tr>
                                                  <td>4</td>
                                                  <td> <input type="text" name="ffname4" value="<?php echo $row['ffname4']; ?>"> </td>
                                                  <td> <input type="text" name="gender4" value="<?php echo $row['gender4']; ?>" > </td>
                                                  <td> <input type="text" name="relationship4" value="<?php echo $row['relationship4']; ?>" > </td>
                                                  <td> <input type="number" name="age4" value="<?php echo $row['age4']; ?>" > </td>
                                                  <td> <input type="number" name="anumber4" value="<?php echo $row['anumber4']; ?>" > </td>
                                                
                                              </tr>

                                                <tr>
                                                  <td>5</td>
                                                  <td> <input type="text" name="ffname5" value="<?php echo $row['ffname5']; ?>"> </td>
                                                  <td> <input type="text" name="gender5" value="<?php echo $row['gender5']; ?>" > </td>
                                                  <td> <input type="text" name="relationship5" value="<?php echo $row['relationship5']; ?>" > </td>
                                                  <td> <input type="number" name="age5" value="<?php echo $row['age5']; ?>" > </td>
                                                  <td> <input type="number" name="anumber5" value="<?php echo $row['anumber5']; ?>" > </td>
                                              </tr>
                                                
                              </table>
                                  <hr>
                          </form>

                        <div class="container">
                            <div class="row" >
                                <div class="col-md-12">
                                   <div class="capche">
                                      <form action="verifycaptche.php" method="POST" >  
                                                
                                          <img src="captche.php" style="margin-left:100px;"class="img">
                                            <br>
                                          
                                          <label for="delarname">captcha:</label>
                                         <input type="text" class="form-control" name="cap" >
                                
                                          
                                          <button type="submit" class="btn btn-primary btn-lg" name="check" style="margin-top:10px;margin-left:140px;">verfiy</button>
                                          <br>
                                    </form>
                                  </div>
                              </div>
                          </div>
                      </div>

           </div>     
      
    </section>
     
    <br><br>

    
    <?php
        include("include/marquee.php");
    ?>
  

         
         <?php
           include("include/footer.php");
        ?>
        

                      <?php
                              }else{
                                echo"<script>window.alert(\"no ration member found !\");</script>";
                                header('refresh:0 url=delear.php');
                              }

                            }
                     ?>

  </body>
</html>
