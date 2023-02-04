<?php
    require_once "../php/dbcon.php";
    include_once("../php/dbcon.php");
    session_start();
    if(empty($_SESSION['id'])) { // ถ้ายังไม่เคย Login ให้กลับไปหน้า Login
        header("refresh:0;url=admin-login.php");
    }
    $name = $_SESSION['username'];
    $email = $_SESSION['email'];

    if(isset($_POST['logout'])) { // กดปุ่ม Logout
        session_destroy();
        header("refresh:0;url=../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage</title>
    <style>
    .card{
        position: absolute;
        margin: 10px;
        left: 9px;
        width: 90%;
        height: 130px;
        background-color: white;
        border-radius: 20px;
    }
    img{
        margin: 20px;
        border-radius: 50%;
        width:90px;
        height:90px;
        box-shadow: rgba(0, 228, 255 ) 0px 0px 0px 4px;
    }
    .name{
        position: absolute;
        top: 40px;
        left: 40%;
        font-size: 22px;
        font-weight: bold;
    }
    .email{
        position: absolute;
        top: 70px;
        left: 40%;
        font-size: 19px;
    }
    .card-1{
        position: absolute;
        margin-top: 40%;;
        left: 19px;
        right: 9px;
        width: 90%;
        height:70px;
        background-color: white;
        border-radius: 20px;
        color: black;
    }
    .card-text{
        align-items: center;
        text-align: center;
        font-size: 20px;
        position: absolute;
        top: 25%;
        left:30%;
    }
    .card-2{
        position: absolute;
        margin-top: 60%;;
        left: 19px;
        right: 9px;
        width: 90%;
        height:70px;
        background-color: white;
        border-radius: 20px;
        color: black;
    }
    .card-text{
        align-items: center;
        text-align: center;
        font-size: 20px;
        position: absolute;
        top: 25%;
        left:30%;
    }
    .card-3{
        position: absolute;
        margin-top: 80%;;
        left: 19px;
        right: 9px;
        width: 90%;
        height:70px;
        background-color: white;
        border-radius: 20px;
        color: black;
    }
    .card-text{
        align-items: center;
        text-align: center;
        font-size: 20px;
        position: absolute;
        top: 25%;
        left:50%;
    }
    .card-4{
        position: absolute;
        margin-top: 100%;;
        left: 19px;
        right: 9px;
        width: 90%;
        height:70px;
        background-color: white;
        border-radius: 20px;
        color: black;
    }
    .card-text{
        align-items: center;
        text-align: center;
        font-size: 20px;
        position: absolute;
        top:25%;
        left:30%;
    }
    .card-5{
        position: absolute;
        margin-top: 120%;;
        left: 19px;
        right: 9px;
        width: 90%;
        height:70px;
        background-color: white;
        border-radius: 20px;
        color: black;
        border: 1px solid white;
    }
    .card-text{
        align-items: center;
        text-align: center;
        font-size: 20px;
        position: absolute;
        top:25%;
        left:30%;
        border: 1px solid white;
    }
    </style>
</head>
<body>
    <div class="card">
        <div class="img"><img src="<?php echo $imageurl?>" alt="" width="100%" class="card-img"></div>
        <div class="name"><?php echo $_SESSION['username']; ?></div>
        <div class="email"><?php echo $_SESSION['email']; ?></div>
    </div>
    <a href="manage/changeprofile.php"><div class="card-1"><img src="../images/profile.png" alt="" style="height: 40px; width:40px; margin-top: 10px; box-shadow: none; border-radius: 0%;"> <div class="card-text">เปลี่ยนรูปภาพ</div> </div> </a>
    <a href="manage/changeusername.php"><div class="card-2"><img src="../images/name.png" alt="" style="height: 40px; width:40px; margin-top: 10px; box-shadow: none; border-radius: 0%;"> <div class="card-text">เปลี่ยนชื่อ</div> </div> </a>
    <a href="manage/changeEmail.php"><div class="card-3"><img src="../images/email.png" alt="" style="height: 40px; width:40px; margin-top: 10px; box-shadow: none; border-radius: 0%;"> <div class="card-text">เปลี่ยนที่อยู่อีเมล</div> </div> </a>
    <a href="manage/changepassword.php"><div class="card-4"><img src="../images/password.png" alt="" style="height: 40px; width:40px; margin-top: 10px; box-shadow: none; border-radius: 0%;"> <div class="card-text">เปลี่ยนรหัสผ่าน</div> </div> </a>
    <form method="POST">
    <button class="card-5" name="logout"><img src="../images/logout.png" alt="" style="height: 40px; width:40px; margin-top: 10px; box-shadow: none; border-radius: 0%; position: absolute; left: 1%; top: 3%; border: none;"> <div class="card-text">ออกจากระบบ</div> </button>
    </form>
    <?php require("navbar_M.php") ?>
    
</body>
</html>