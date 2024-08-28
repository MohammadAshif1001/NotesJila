<?php
session_start();
$email_address= $_SESSION['email'];
include('config/database.php');
if(empty($email_address))
{
  header("location:index.php?login-first");
  
}
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--custom style-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">


</head>

<div class="container-fluid bg-secondary menu sticky-top" style="background-color: <?php echo $navbarBackground; ?>!important">
    <div class="row">
      <div class="col-sm-2">
         <ul class="nav">
    <li class="nav-item">
      <a class="nav-link shortname" href="#">Nj</a>
    </li>
    
  </ul>

   
      </div>
      <div class="col-sm-6">
         <ul class="nav">
  
    
  
    <li class="nav-item">
      <h4 class="text-light" style="position: relative;top: 8px">Admin Panel</h3>
    </li>
  </ul>
      </div>
      <div class="col-sm-4">
        <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link " href="logout.php" title="logout"><i class='fas fa-sign-out-alt'></i>
</a>
    </li>
  </ul>
      </div>
    </div>


</div>
<body>