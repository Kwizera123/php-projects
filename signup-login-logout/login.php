<?php
$login=0;
$invalid=0;

  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql = "select * from `registrationform` where username = '$username' and password = '$password'";

    $result = mysqli_query($mysqli,$sql);
      if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
          $login=1;

          session_start();
          $_SESSION['username']=$username;
          header('location:home.php');
          
        }else{
        $invalid=1;
        }
        
      }

  }

 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <?php 
      if($login){
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Great!</strong> You have successfully Logged In.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        ';
      }
    ?>

<?php 
      if($invalid){
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Ohoo Sorry!</strong> Invalid username or passwor.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        ';
      }
    ?>

    <div class="container mt-5">
      <h2 class="lead fw-lighter text-center">Login to our Website</h2>
    <form action="login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fw-lighter">Username</label>
    <input type="text" name="username" class="form-control fw-lighter" placeholder="Enter your Username" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label fw-lighter">Password</label>
    <input type="password" name="password" class="form-control fw-lighter" placeholder="Enter your password">
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>