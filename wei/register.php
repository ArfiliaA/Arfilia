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
    <div class="title">สมัครบัญชี</div>
    <div class="content">
      <form  method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">ชื่อ</span>
            <input type="text" placeholder="กรอกชื่อของคุณ" required name="username">
          </div>
          <div class="input-box">
            <span class="details">อีเมล</span>
            <input type="email" placeholder="กรอกที่อยู่อีเมลของคุณ" required name="email">
          </div>
          <div class="input-box">
            <span class="details">รหัสผ่าน</span>
            <input type="password" placeholder="กรอกรหัสผ่านของคุณ" required name="password">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register" name="reguser">
        </div>
        <p>มีบัญชีแล้วใช่มั้ย? <a href="login.php">เข้าสู่ระบบ</a></p>
      </form>
    </div>
  </div>
</body>
</html>