<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <?php
#require 'loginnav.php';
require 'connect.php';
session_start();


if (isset($_POST['loginuser'])) {

  if (isset($_POST['user_name']) == "" || isset($_POST['user_password']) == "") {
    echo "fill every information ";
  }
  else {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $query = "SELECT * FROM for_project WHERE name ='$user_name' AND password = '$user_password' limit 1";

    $log = mysqli_query($conn, $query);

    if (mysqli_num_rows($log) == 1) {  
      $_SESSION['user_name'] = $user_name;
      header('location:loginhome.php');
    
      echo $user_name;
    }
    else {
      echo "Your Login Name or Password is invalid";
    }


  }

}

?>
    <h4 class="text-center my-2">Hello, Log-in</h4><br>
    <hr class="border border-success border-1 opacity-50">
    <div class="container">
      <form action="" method="POST">
     <div class="mb-3">
         Name 
        <input type="text" name="user_name" class="form-control" placeholder="Enter your email or user name">
     </div>

     <div class="mb-4">
        Password 
        <input type="text" name="user_password" class="form-control" placeholder="Make Sure Your Password Is Right">
     </div>

     <input class="btn btn-primary" type="submit" name="loginuser">
      </form>
</div>
<hr class="border border-success border-1 opacity-50">
 
  </body>
</html>