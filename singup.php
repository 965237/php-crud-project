<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <?php
require 'nav.php';
require 'connect.php';

if (isset($_POST['submit'])) {

  if (isset($_POST['name']) == "" || isset($_POST['email']) == "" || isset($_POST['password']) == "") {
    echo "fill every information";
  }
  else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO for_project(name,email,password) VALUES('$name','$email','$password')";
    $result = mysqli_query($conn, $sql);
    if($result){
      echo '<div class="alert alert-success"> Your Account Is Created Enjoy</div>';
    }
    else{
      echo "data not save in data base";
    }


  }
}

?>
    <h4 class="text-center">Hello, User Sing-up</h4>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   
<div class="container my-5 ">
 <hr class="border border-danger border-2 opacity-50">
 

  <div class="container bg-green my-2">
  <form action="" method="POST">
  <div class="mb-3">
    Name
    <input type="text" class="form-control" name="name">
</div>
  <div class="mb-3">
    Email address
    <input type="email" class="form-control" name="email">
    
  </div>
  <div class="mb-3">
    Password
    <input type="password" class="form-control" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Sing-Up</button>
</form>
   
 </div>
<div class="container my-2">
  <h6 class="text-center">If you have account places Sing-up </h6>
 <a class="btn btn-primary" href="login.php" name="log_in">Log-in</a> <br>
 <hr class="border border-danger border-2 opacity-50"><br><br>
 
</div>

  </body>
</html>