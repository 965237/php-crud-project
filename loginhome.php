
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>
        
        </style>
  </head>
  <body>
    <?php
include 'loginnav.php';


session_start();
#echo '" "."welcome'.$_SESSION['user_name'].';

if($_SESSION['user_name']){
include 'logindisplay.php';
}
else{
  echo "unable to get details";
}

?> 

<div class="container">
  <a href="logout.php" name="logout"><input type="submit" class="btn btn-danger" value="Log-Out"></a><br>
    <div>
  </div>
</div><br>
  </body>
</html>
