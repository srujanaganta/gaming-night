<?php

@include 'config.php';

if(isset($_POST['submit'])){

   

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $comments = mysqli_real_escape_string($conn, $_POST['COMMENTS']);

   $select = " SELECT * FROM COMPLAINTS WHERE email = '$email' && COMMENTS = '$comments' ";

   $result = mysqli_query($conn, $select);

  
         $insert = "INSERT INTO COMPLAINTS(name, email, COMMENTS) VALUES('$name','$email','$comments')";
         mysqli_query($conn, $insert);
         header('location:Registercomplaint.php');
      
   

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register complaint</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="text" name="COMMENTS" required placeholder="COMMENTS">
      
      <input type="submit" name="submit" value="SUBMIT" class="form-btn">
      
   </form>
   <a href="logout.php" class="btn">logout</a>

</div>

</body>
</html>