 <?php
      if(isset($_POST['check'])){
                                           session_start();
                                        $code= $_SESSION['capcode'];
                                       $user =$_POST['cap'];

                                   if($code == $user)
                               {
                                 //echo"verify";
                                 echo"<script>window.alert(\"verify\");</script>";
                                   header('refresh:0 url=ration.php');
                                    //header('location:delear.php');
                                                                    
                               }
                                 else
                              {
                                  // echo"not verify";
                                echo"<script>window.alert(\"not verify!\");</script>";
                                 header('refresh:0 url=delear.php');
                               //header('location:delear.php');
                              }

      }
                                                                    

 ?>
