<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>HTML Form</h1>
  <div class="container">
    <form action="connect.php" method="post">
      <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter your name">
      </div>
      <div>
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter your Email">
      </div>
      <div class="genderc">
        <label>Gender</label>
        <input class="gender1" type="radio" name="gender" value="m">Male
        <input class="gender1" type="radio" name="gender" value="f">Female
        <input class="gender1" type="radio" name="gender" value="n">Others
      </div>
      <div>
        <label>Telephone</label>
        <input type="text" name="mobile" placeholder="Enter your Mobile">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your Password">
      </div>
      <div class="btn">
        <button type="submit">Submit Data</button>
      </div>
    </form>
  </div>
</body>
</html>