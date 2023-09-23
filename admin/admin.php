
<!DOCTYPE html>
<html lang="en">
  <head>
        
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
     <title>ADMIN</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="css/animated.css" rel="stylesheet">
       <link rel="stylesheet" href="style.css">   
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </head>

 <body>

    

     <div id="form" class="form-signin animated shake"  >

      <h2 align="center" >ADMIN LOGIN</h2><hr>

          <form action="logincheck.php" method="POST">
            <div class="form-group">
              <label for="user"><b>Username:</b></label>
              <input type="text" class="form-control" name="user" value="" autocomplete="off">
            </div>

            <div class="form-group">
              <label for="pass"><b>Password:</b></label>
              <input type="password" class="form-control" name="pass">
            </div>
          
            <button type="submit" class="btn btn-lg btn-primary btn-block" name="submit"><b>login</b></button>
          </form> 
    </div>
  
   
 </body>
 
</html>
