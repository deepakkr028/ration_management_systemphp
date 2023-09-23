<?php 
   ob_start();
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
          <h1 align="center" style="color:tomato;"><b> ADD RATION CARD MEMBERS</b></h1>
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
                                                        <td> <input type="text" name="nam" required> </td>
                                                        <td> Mobile number</td>
                                                        <td> <input type="number" name="mobileno" required></td>
                                                    </tr>

                                                  <tr>
                                                    <td>Father/spouse Name</td>
                                                    <td> <input type="text" name="fname" required></td>

                                                    <td>Category</td>
                                                    <td> <input type="text" name="category" required> </td>

                                                </tr>

                                                  <tr>
                                                    <td>Occupation</td>
                                                    <td><input type="text" name="occupation" required></td>
                                                    <td>Old Ration Card</td>
                                                    <td> <input type="number" name="oldrationnumber"> </td>
                                                </tr>

                                                  <tr>
                                                    <td>Income</td>
                                                    <td> <input type="number" name="income" required> </td>
                                                    <td>Status</td>
                                                    <td>Active</td>
                                                  </tr>

                                                  <tr>
                                                    <th>Ration Card Details</th>
                                                </tr>

                                                <tr>
                                                    <td>Ration Card No.</td>
                                                    <td> <input type="number" name="rationcardnumber" required> </td>
                                                    <td>Card Type</td>
                                                    <td> <input type="text" name="cardtype" required> </td>
                                                </tr>
                                                      
                                                    <tr>
                                                      <td>Circle/Tehsil</td>
                                                      <td> <input type="text" name="circlet" required> </td>
                                                      <td>Issue Date</td>
                                                      <td><input type="date" name="issuedate" required > </td>
                                                      <td></td>
                                                      <td></td>
                                                    </tr>
                                                
                                              <tr>
                                                <th>Fair Price Shop Details</th>
                                                </tr>
                                                <tr>
                                                <td>owner</td>
                                                <td><input type="text" name="oname" required> </td>
                                                <td>Code</td>
                                                <td> <input type="number" name="ocode" required> </td>
                                              </tr>
                                                
                                              <tr>
                                                <th>Present Address Details</th>
                                              </tr>

                                              <tr>
                                                <td>House no</td>
                                                <td> <input type="number" name="houseno" > </td>
                                                <td>Landmark</td>
                                                <td> <input type="text" name="landmark"> </td>
                                                <td>Village/Town</td>
                                                <td> <input type="text" name="villagetown"> </td>
                                              </tr>

                                              <tr>
                                                <td>Tehsil</td>
                                                <td> <input type="text" name="tehsil"> </td>
                                                <td>District</td>
                                                <td> <input type="text" name="district" required> </td>
                                                <td>State</td>
                                                <td> <input type="text" name="stat" required> </td>
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
                                                <td> <input type="text" name="ffname1" > </td>
                                                <td> <input type="text" name="gender1" > </td>
                                                <td> <input type="text" name="relationship1" > </td>
                                                <td> <input type="number" name="age1" > </td>
                                                <td> <input type="number" name="anumber1"> </td>
                                              
                                              </tr>

                                              <tr>
                                                <td>2</td>
                                                <td> <input type="text" name="ffname2"> </td>
                                                <td> <input type="text" name="gender2">  </td>
                                                <td> <input type="text" name="relationship2"> </td>
                                                <td> <input type="number" name="age2"> </td>
                                                <td> <input type="number" name="anumber2"> </td>
                                              </tr>

                                              <tr>
                                                <td>3</td>
                                                <td> <input type="text" name="ffname3"> </td>
                                                <td> <input type="text" name="gender3"> </td>
                                                <td> <input type="text" name="relationship3"> </td>
                                                <td> <input type="number" name="age3"> </td>
                                                <td> <input type="number" name="anumber3"> </td>
                                                
                                              </tr>

                                              <tr>
                                                <td>4</td>
                                                <td> <input type="text" name="ffname4"> </td>
                                                <td> <input type="text" name="gender4"> </td>
                                                <td> <input type="text" name="relationship4"> </td>
                                                <td> <input type="number" name="age4"> </td>
                                                <td> <input type="number" name="anumber4"> </td>
                                              
                                            </tr>

                                            <tr>
                                                <td>5</td>
                                                <td> <input type="text" name="ffname5" > </td>
                                                <td> <input type="text" name="gender5" > </td>
                                                <td> <input type="text" name="relationship5"> </td>
                                                <td> <input type="number" name="age5"> </td>
                                                <td> <input type="number" name="anumber5"> </td>
                                            </tr>
                                              
                              </table>
                              <hr>

                              <button type="submit" class="btn btn-primary btn-lg" name="submit2"> ADD ration card  MEMBER</button>
                                              
                          </form>

                      </div>
    
                          <?php

                                  if(isset($_POST['submit2']))
                                  {
                                    $nam =$_POST['nam'];
                                    $fname =$_POST['fname'];
                                    $mobileno =$_POST['mobileno'];
                                    $occupation=$_POST['occupation'];
                                    $oldrationnumber=$_POST['oldrationnumber'];
                                    $income =$_POST['income'];
                                    $rationcardnumber =$_POST['rationcardnumber'];
                                    $cardtype =$_POST['cardtype'];
                                    $category =$_POST['category'];
                                    $circlet=$_POST['circlet'];
                                    $issuedate =$_POST['issuedate'];
                                    $oname =$_POST['oname'];
                                    $ocode =$_POST['ocode'];

                                    $houseno=$_POST['houseno'];
                                    $landmark =$_POST['landmark'];
                                    $villagetown =$_POST['villagetown'];
                                    $teshil=$_POST['tehsil'];
                                    $district =$_POST['district'];
                                    $stat=$_POST['stat'];


                                    $ffname1 =$_POST['ffname1'];
                                    $gender1 =$_POST['gender1'];
                                    $relationship1=$_POST['relationship1'];
                                    $age1=$_POST['age1'];
                                    $anumber1 =$_POST['anumber1'];
                                  
                                    $ffname2 =$_POST['ffname2'];
                                    $gender2 =$_POST['gender2'];
                                    $relationship2=$_POST['relationship2'];
                                    $age2=$_POST['age2'];
                                    $anumber2 =$_POST['anumber2'];

                                    $ffname3 =$_POST['ffname3'];
                                    $gender3 =$_POST['gender3'];
                                    $relationship3=$_POST['relationship3'];
                                    $age3=$_POST['age3'];
                                    $anumber3 =$_POST['anumber3'];

                                    $ffname4 =$_POST['ffname4'];
                                    $gender4 =$_POST['gender4'];
                                    $relationship4=$_POST['relationship4'];
                                    $age4=$_POST['age4'];
                                    $anumber4 =$_POST['anumber4'];

                                    $ffname5 =$_POST['ffname5'];
                                    $gender5 =$_POST['gender5'];
                                    $relationship5=$_POST['relationship5'];
                                    $age5=$_POST['age5'];
                                    $anumber5 =$_POST['anumber5'];
                                  

                                      $sql = " INSERT INTO `addrationmember`(`nam`, `fname`, `mobileno`, `occupation`, `oldrationnumber`, `income`, 
                                      `rationcardnumber`, `cardtype`, `category`, `circlet`, `issuedate`,`oname`, `ocode`,
                                        `houseno`, `landmark`, `villagetown`, `tehsil`, `district`, `stat`,
                                        `ffname1`, `gender1`, `relationship1`, `age1`, `anumber1`,
                                          `ffname2`, `gender2`, `relationship2`, `age2`, `anumber2`,
                                          `ffname3`, `gender3`, `relationship3`, `age3`, `anumber3`, 
                                          `ffname4`, `gender4`, `relationship4`, `age4`, `anumber4`,
                                            `ffname5`, `gender5`, `relationship5`, `age5`, `anumber5`)
                                      VALUES ( '$nam','$fname','$mobileno','$occupation','$oldrationnumber','$income','$rationcardnumber',
                                      '$cardtype','$category','$circlet','$issuedate','$oname','$ocode',
                                      '$houseno','$landmark','$villagetown','$teshil','$district','$stat',
                                      '$ffname1','$gender1','$relationship1','$age1','$anumber1',
                                      '$ffname2','$gender2','$relationship2','$age2','$anumber2',
                                      '$ffname3','$gender3','$relationship3','$age3','$anumber3',
                                      '$ffname4','$gender4','$relationship4','$age4','$anumber4',
                                      '$ffname5','$gender5','$relationship5','$age5','$anumber5') ";
                                                          $query= mysqli_query($con,$sql);
                                          
                                            if($query){

                                                    echo"<script>window.alert(\"member added sucessfully!\");</script>";

                                                  echo"add member sucess";
                                                  header('refresh:2 url=delear.php');
                                                   
                                                  
                                                  }else{
                                                    echo"<script>window.alert(\"member doesnot add sucessfully!\");</script>";
                                                    //echo"error:";

                                                  }

                                  
                                  } 
                          ?>

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
  </body>
</html>
