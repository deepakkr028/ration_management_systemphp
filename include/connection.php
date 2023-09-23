<?php 
    session_start();
    $con =mysqli_connect('localhost','root');
    if($con){
        echo"";
    }else{
        echo"connection not establish";
    }
    $db = mysqli_select_db($con,'project');
?>