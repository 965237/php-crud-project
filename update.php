<?php
include 'connect.php';
$id = $_GET['id'];

$select = "SELECT * FROM for_project WHERE id='$id'";

$query = mysqli_query($conn, $select);

$data = mysqli_num_rows($query);

$row = mysqli_fetch_assoc($query);

if(isset($_POST['update'])){
    $user = $_POST['name'];
    $mail = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "UPDATE for_project SET name='$user' , email='$mail' , password='$pass' WHERE id='$id' ";
    $result = mysqli_query($conn, $sql);
    if($data){
        echo "data is update successfully";
        header ('location:logindisplay.php');
    }
    else{
        echo "data not update";
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <h4 class="text-center my-3">Hello, User Update Your Details</h4>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   
<div class="container my-5 ">
 <hr class="border border-danger border-2 opacity-50">
 

  <div class="container bg-green my-2">
  <form action="" method="POST">
  <div class="mb-3">
    Name
    <input type="text" class="form-control" name="name"  value="<?php echo $row['NAME']  ?>">
</div>
  <div class="mb-3">
    Email address
    <input type="email" class="form-control" name="email"  value="<?php echo $row['EMAIL']  ?>">
    
  </div>
  <div class="mb-3">
    Password
    <input type="password" class="form-control" name="password"  value="<?php echo $row['PASSWORD']  ?>">
  </div>
 
  <button type="submit" class="btn btn-info" name="update">Update</button>
</form>
   
 </div>
<div class="container my-2">
  <h6 class="text-center">If you have account places Sing-up </h6>
 <a class="btn btn-primary" href="login.php" name="log_in">Log-in</a> <br>
 <hr class="border border-danger border-2 opacity-50"><br><br>
 
</div>
  </body>
  </html