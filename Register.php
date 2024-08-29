<?php include('server.php') ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration form </title>
    <link rel="stylesheet" href="style.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="register.php" method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" value="<?php echo $name; ?>">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" value="<?php echo $email; ?>">
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" required>
      </div>
      
      
      <div class="input-box button">
        <input type="Submit" value="Register Now" name="reg_user">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>

</body>
</html>
