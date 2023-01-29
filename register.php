<?php 
  session_start();
  require_once("php/dbcon.php");
  if(isset($_POST['reguser'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];



    $sql = "INSERT INTO user(username , email , password) VALUES ('$username' , '$email' , '$password')";
    $query = mysqli_query($dbcon , $sql);
    if($query){
        echo "<script type='text/javascript'> alert('Register success') </script>";
        header("refresh:0; url=login.php");
    }else{
        echo "<script type='text/javascript'> alert('Register not success') </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="scss/styleregister.css">
</head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form  method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">username</span>
            <input type="text" placeholder="Enter your username" name="username">
          </div>
          <div class="input-box">
            <span class="details">email</span>
            <input type="email" placeholder="Enter your email" name="email">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register" name="reguser">
        </div>
        <p>Already a member? <a href="login.php">Sign in</a></p>
      </form>
    </div>
  </div>
</body>
</html>