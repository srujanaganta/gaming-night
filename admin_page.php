<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

  
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>User type : <span>Admin</span></h3>
      <h1>Name : <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      
      
      <a href="logout.php" class="btn">logout</a><br></br>
      <a href="Viewcomplaint.php" class="btn">View Complaints</a>

   </div>

</div>

</body>
</html>