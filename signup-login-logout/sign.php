<?php

  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    // $sql = "insert into `registrationform`(username,password) values('$username','$password')";
    // $result=mysqli_query($mysqli,$sql);

    // if($result){
    //   echo "Data inserted successfully";
    // }else{
    //   //die(mysqli_error($mysqli));
    //   echo $mysqli->connect_error;
    // }

    $sql = "select * from `registrationform` where username = '$username'";

    $result = mysqli_query($mysqli,$sql);
      if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
          echo "User already exists";
        }else{
         $sql = "insert into `registrationform`(username,password) values('$username','$password')";
         $result=mysqli_query($mysqli,$sql);
         if($result){
             echo "Signup successful";
           }else{
         die(mysqli_error($mysqli));
         
           }
        }
      }

  }

 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h2 class="lead fw-lighter text-center">Login Up Form</h2>
    <form action="sign.php" method="post">
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