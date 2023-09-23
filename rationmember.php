<?php 
  require("include/connection.php");
  require("include/restrictdelear.php");
?>


<?php
    if(!isset( $_SESSION['user'])){
    header('location:index.php');
  }
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
            height:150px;
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
      
        
    
     <div class="jumbotron">
        <div class="container">
          <div id="head">
            <h1 align="center"><b>RATION HOLDER LIST</b></h1>
            </div>
          </div>
     </div> 
    
      
     <section>
         <div class="container">
             <div class="row">
                    
                         
                                      

                  <div class="col-md-10">   
                    
                  
                <div class="search" style="margin-left:80px; margin-bottom:5px;">
                  <form  action="" method="POST">
                        <div class="input-group">
                          <input type="text" class="form-control" name="searchvalue" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button name="search" class="btn btn-default">Go!</button>
                          </span>
                        </div>
                  </form>
                </div>
              
                
                        
                   <table class="table table-bordered table-striped table-hover">
                    <h6 align="left" style="margin-left:70px;"> search result... </h1> 

                            <?Php
                              if(isset($_POST['search']))
                              {
                                $search =$_POST['searchvalue'];
                                  
                                $sql = "(SELECT id,nam,fname,mobileno,rationcardnumber,cardtype FROM addrationmember 
                                where  nam='$search' or  rationcardnumber='$search' or cardtype='$search'
                                or mobileno='$search' or fname='$search')";
                                    $query= mysqli_query($con,$sql); 
                                    while($row=mysqli_fetch_array($query)){ 
                          ?>
              
                                
                               <tr>
                                  <td> <?php echo $row['id'];  ?> </td>
                                  <td> <?php echo $row['nam']; ?> </td>
                                  <td> <?php echo $row['fname']; ?> </td>
                                  <td> <?php echo $row['mobileno']; ?> </td>
                                  <td> <?php echo $row['rationcardnumber']; ?> </td>
                                  <td> <?php echo $row['cardtype']; ?> </td>
                                  <td>  <a href="editd.php?id=<?php echo $row['id']; ?>"> <i class="fa fa-pencil-square" aria-hidden="true"></i>  </td>
                                  <td> <a href="deleted.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i> </td>
                              </tr>
                       
                      <?php   
                                      }
                                }
                                                              
                    ?>

          </table>
     

                           <hr style="margin-left:70px;">

                       <table class="table table-bordered table-striped table-hover">
                           <tr border=4px;>
                            <th>ID</th>
                              <th>Name</th>
                              <th>father/sponser name</th>
                              <th>mobileno</th>
                              <th>ration card no</th>
                              <th>card type</th>
                              <th>edit</th>
                              <th>del</th>
                         </tr>

                          
                
                            <?php
                                $sql = "(SELECT id,nam,fname,mobileno,rationcardnumber,cardtype FROM addrationmember)";
                                $result = mysqli_query($con, $sql);
                                  while($row=mysqli_fetch_array($result)){
                            ?>

                                <tr>
                                  <td> <?php echo $row['id'];  ?> </td>
                                  <td> <?php echo $row['nam']; ?> </td>
                                  <td> <?php echo $row['fname']; ?> </td>
                                  <td> <?php echo $row['mobileno']; ?> </td>
                                  <td> <?php echo $row['rationcardnumber']; ?> </td>
                                  <td> <?php echo $row['cardtype']; ?> </td>
                                  <td>  <a href="editd.php?id=<?php echo $row['id']; ?>"> <i class="fa fa-pencil-square" aria-hidden="true"></i>  </td>
                                  <td> <a href="deleted.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i> </td>
                              </tr>
      
                              <?php
                                  }
                            ?>
                    </table>
              
                </div>   

           </div> 
       </div>
    </section>

        <?php
           include("include/footer.php");
           include("include/marquee.php");
        ?>


       
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
         
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
