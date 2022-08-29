<?php

include 'connect.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Display data from database</title>
    <style>

      </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Data, From Database!</h1>
    <div class="container my-4">
      <div class="mb-3">
         <a class="btn btn-info " href="singup.php" >ADD USER</a>
</div>
    <table class="table caption-top table table-bordered">
  <caption>List of users</caption>

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">USER NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
      <th scope="col" class="text-center">ACTION</th>
    </tr>
  </thead>
  
      <?php
$select = "SELECT * FROM for_project   ";

$query = mysqli_query($conn, $select);

if(mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_assoc($query)){
    echo "<tbody>";  
    echo "<tr>
    <td>".$row["ID"] ."</td>
    <td>".$row["NAME"]."</td>
    <td>".$row["EMAIL"]."</td>
    <td>".$row["PASSWORD"]."</td>

    <td><a href='update.php?id=$row[ID]'><input type='submit' class='btn btn-info' value='Update'></a>
    <a href='delete.php?id=$row[ID]'><input type='submit' class='btn btn-danger my-2' value='Delete'></a></td></tr>";
      
      
    }
  }
  else{
    echo "no data found";
  }
  ?>
   
    </table>
 
</div>
  </body>
</html>




