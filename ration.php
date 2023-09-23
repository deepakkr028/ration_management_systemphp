<?php 
   ob_start();
  require("include/connection.php");
  require("include/restrictdelear.php");    
?>

<!DOCTYPE html>
<html lang="en">
  <head>  
    <meta charset="utf-8">

            <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
                      <script type="text/javascript">
                          function fsum() {
                              var txtFirstNo = document.getElementById('floarwt').value;
                              var txtSecondNo = document.getElementById('floarprice').value;
                              var result = parseFloat(txtFirstNo) * parseFloat(txtSecondNo);
                              if (!isNaN(result)) {
                                  document.getElementById('floarpriceresult').value = result;
                              }
                          }
            </script>


            <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
                    <script type="text/javascript">
                                  function rsum() {
                                      var txtFirstNo = document.getElementById('ricewt').value;
                                      var txtSecondNo = document.getElementById('riceprice').value;
                                      var result = parseFloat(txtFirstNo) * parseFloat(txtSecondNo);
                                      if (!isNaN(result)) {
                                          document.getElementById('totalriceprice').value = result;
                                      }
                                  }
          </script>

          <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
            <script type="text/javascript">
                        function tsum() {
                            var txtFirstNo = document.getElementById('sugerwt').value;
                            var txtSecondNo = document.getElementById('sugarprice').value;
                            var result = parseFloat(txtFirstNo) * parseFloat(txtSecondNo);
                            if (!isNaN(result)) {
                                document.getElementById('totalsugarprice').value = result;
                            }
                        }
          </script>

            <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
                <script type="text/javascript">
                            function add() {
                                var txtFirstNo = document.getElementById('totalsugarprice').value;
                                var txtSecondNo = document.getElementById('floarpriceresult').value;
                                var txtSecond = document.getElementById('totalriceprice').value;
                                var result = parseFloat(txtFirstNo) + parseFloat(txtSecondNo) + parseFloat(txtSecond) ;
                                if (!isNaN(result)) {
                                    document.getElementById('totalprice').value = result;
                                }
                            }
            </script>
                           

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
    
                 

           <div class="container">
            <div class="row" style="margin-bottom:10px; margin-left:50px;">



                <div class="col-md-6">

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
                          <h2> PRICE LIST  </h2>
                    <table class="table table-bordered table-striped table-hover" style="margin-left:-10px; backgroud-color:red ; color:blue;"
                        <tr border=4px;>
                          <th>Rice APL price</th>
                            <th>Rice  BPL price </th>
                            <th>Floar  APL price </th>
                            <th>Floar BPL price </th>
                            <th>sugar APL price </th>
                            <th>sugar BPL price </th>
                        </tr>

                              <tr>
                                <td> <?php echo $r1;  ?> </td>
                                <td> <?php echo $r2; ?> </td>
                                <td> <?php echo  $w1; ?> </td>
                                <td> <?php echo  $w2; ?> </td>
                                <td> <?php echo $s1 ?> </td>
                                <td> <?php echo  $s2; ?> </td>
                               
                              
                         </tr>

                              <?php              
                                          }    
                              ?>

                    </table>     




                      <?php
                        $rationcardnumber = $_SESSION['rationcardnumber'];
                        $sql = "(SELECT * FROM addrationmember WHERE rationcardnumber = '$rationcardnumber')";
                              $result = mysqli_query($con,$sql);
                                      while($row=mysqli_fetch_assoc($result)){
                

                      ?>

              
                      <form  action="" method="POST">
                          <label for="rationmembername"> Ration Member Name:</label>
                          <input type="text" class="form-control" name="nam" value="<?php  echo $row['nam']; ?> ">

                          <label for="rationcardnumber">  Ration card number:</label>
                          <input type="text" class="form-control" name="rationcardnumber" value="<?php echo $row['rationcardnumber'];  ?> ">

                              <label for="rationmembername"> Ration card number:</label>
                              <input type="text" class="form-control" name="cardtype" value="<?php echo $row['cardtype']; ?> ">
                     </form>
                   </div>

                   
                </div>
        </div>
                 
       <hr>
        

       <div class="container">
             <div class="row">
          
                <div class="col-md-10">             

                  <form  action="" method="POST">
                     
                      <table class="table table-bordered table-striped table-hover">
                           <tr border=4px;>
                            <th>Items</th>
                              <th>Selected Items </th>
                              <th>Weight(kg)</th>
                              <th>price per kg </th>
                              <th>Total price </th> 
                            
                           </tr>

                         <tr border=4px;>
                            <td> floar</td>
                            <td>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox"  id="ration" name="ration[]"  value="floar" >
                                  
                              </div>
                          </td>    
                          <td> <input type="text" name="floarwt" id="floarwt" onkeyup="fsum()" /></td>
                          <td> <input type="text" name="floarprice" id="floarprice" onkeyup="fsum()" /></td>
                          <td> <input type="text"  name="floarpriceresult" id="floarpriceresult" value="0" onkeyup="fsum()"  onkeydown="sum()"/></td>

                         </tr>

                    
                         <tr border=4px;>
                            <th>Rice</th>

                            <td>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox"  id="ration" name="ration[]" value="rice">                                
                              </div>
                          </td>    
                            <td>  <input type="text"  name="ricewt"  id="ricewt" onkeyup="rsum()" /> </td>
                            <td> <input type="text"  name="riceprice" id="riceprice"  onkeyup="rsum()" /></td>
                            <td> <input type="text"  name="totalriceprice" id="totalriceprice" value="0"  onkeyup="rsum()" /></td>
                           
                       </tr>
          
                         <tr border=4px;>
                            <th>Sugar</th>
                            <td>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" id="ration" name="ration[]" value="sugar" >
                                
                              </div>
                          </td>    
                              <td><input type="text" id="sugerwt" name="sugerwt" onkeyup="tsum()" / > </td>
                              <td> <input type="text" id="sugarprice" name="sugarprice"  onkeyup="tsum()" /></td>
                              <td> <input type="text" id="totalsugarprice"  name="totalsugarprice" value="0" onkeyup="tsum()" /></td>
                             
                       </tr>

                            <tr border=4px;>
                              <td> </td>
                                <td> </td>
                                <td> Total Amount In rupees </td>
                                <td> </button></td>
                                <td> <input type="text" id="totalprice"  name="totalprice" value="0" onclick="add()" /></td>
                                
                            </tr>


                             
                                     


                    </table>
                    <button type="submit"  name="submit" class="btn btn-sucess" style="margin-left:100px">submit</button>
                 </form>   

                      <?Php

                          if(isset($_POST['submit']))
                          {
                            $floarwt= $_POST['floarwt'];
                            $ricewt= $_POST['ricewt'];
                            $sugarwt= $_POST['sugerwt'];                       
                            $floarprice= $_POST['floarpriceresult'];
                            $riceprice= $_POST['totalriceprice'];
                            $sugarprice = $_POST['totalsugarprice'];                        
                            $totalprice=$_POST['totalprice'];
                            date_default_timezone_set("Asia/Calcutta");
                            $zone=  date_default_timezone_get() ;
                            $time = date("H:i:s");
                            $date = date('Y/m/d');
                            $nam = $row['nam'];
                            $rationcardnumber =$row['rationcardnumber'];                       
                            $cardtype = $row['cardtype'];
                            $ration1 =$_POST['ration'];
                            $b = implode(",",$ration1);  
                            $nam = $row['nam'];                        
                            $sql= "INSERT INTO `memberstock`(`date`, `time`, `nam`, `rationcardnumber`, `cardtype`,`ration`
                            ,`ricewt`, `floarwt`, `sugarwt`,`riceprice`, `floarprice`, `sugarprice`, `totalprice`)  
                                VALUES('$date','$time','$nam','$rationcardnumber','$cardtype','$b','$ricewt','$floarwt',
                                '$sugarwt','$riceprice','$floarprice','$sugarprice ','$totalprice')";
                                $query= mysqli_query($con,$sql); 

                            if($query){
                              echo"<script>window.alert(\" ration given sussefully!\");</script>"; 
                              header('refresh:2 url=delear.php');
           
                            
                            }else{
                              echo"<script>window.alert(\" ration does not given sussefully!\");</script>";
                              //echo"error:";

                            }
                          }
                    ?>                
        
                                     

              </div>   
            
       
           </div> 
       </div>

           <?php
                                         }
         ?>


       <br>
      
      <?php
        include("include/marquee.php");
        include("include/footer.php");

     ?>
   </body>
</html>