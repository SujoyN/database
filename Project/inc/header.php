<?php include 'config/config.php';?>
<?php include 'lib/Database.php';?>
<?php include 'helper/format.php';?>
<?php

    $db=new Database();
    $fm=new Format();    

?>

<!DOCTYPE html>
<html>
<head>
	<title>Basic Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
 
<div class="headrsection templete clear">
        
        <div class="row">

         <div class="logo col-xs-12 col-sm-12 col-md-4 col-lg-4">
         <h4>HOSPITAL MANAGEMENT SYSTEM</h4>
         <p>Hospitals,Doctors,Blood donors are under the same roof</p>

        </div>
        <div class="logo col-xs-12 col-sm-12 col-md-4 col-lg-4">
         <div class="searchbtn clear">
              <form action="search.php" method="get">
                <input type="text" name="search" placeholder="Search keyword..."/>
                <input type="submit" name="submit" value="Search"/>
              </form>
        </div>
        </div>

        <div class="social clear col-xs-12 col-sm-12 col-md-4 col-lg-4">
            
            <a href="#"><img src="images/social/logo3.jpg" alt="Facebook"></a>
            <a href="#"><img src="images/social/logo4.jpg" alt="Twitter"></a>
            <a href="#"><img src="images/social/logo2.jpg" alt="LinkedIn"></a>
            <a href="#"><img src="images/social/logo1.jpg" alt="GooglePlus"></a>

        </div>

        </div>
</div>   


