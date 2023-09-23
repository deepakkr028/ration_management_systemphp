<?php 
  require("include/connection.php")
?>

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
                          header('refresh:0 url=delear.php');
                        }else{
                          echo"<script>window.alert(\" ration does not given sussefully!\");</script>";
                          //echo"error:";

                        }
                      }
                   ?>                
                         