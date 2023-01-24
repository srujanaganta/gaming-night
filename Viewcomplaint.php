<?php

@include 'config.php';


    $query = "SELECT * FROM COMPLAINTS";
    $data = mysqli_query($conn, $query) ;

    

        while ($row = mysqli_fetch_array($data)) {
            echo $row['name'].' '.$row['email'].' '.$row['COMMENTS'].'<br/>';
         }
     




?>
<h2>Complaints</h2>
	<table width="500" cellpadding=5 celspacing=5 border=1>
	<tr>
	
	<th>Name</th>
	<th>Email</th>
	<th>Comments</th>
	
	</tr>
	<?php while($row=mysqli_fetch_array($data)):?>
	<tr>
	
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['COMMENTS'];?></td>
	</tr>
	<?php endwhile;?> 
	</table>

<!DOCTYPE html>
<html lang="en">
<style>
table, th, td {
  border:1px solid black;
}
</style>
<style>
input{
  border:1px solid black;
}
</style>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   
   <link rel="stylesheet" href="style.css">

</head>
<body>


<div class="form-container">

   
   <a href="logout.php" class="btn">logout</a>

</div>


   

</body>
</html>