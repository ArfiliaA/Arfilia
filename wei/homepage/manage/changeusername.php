<?php
require_once("../../php/dbcon.php");
session_start();

if(isset($_POST['submit'])) { //กดปุ่ม แก้ไข
  $id = $_SESSION['id'];
  $username = $_POST['username'];

  $sql = "UPDATE user SET username = '$username' WHERE id = $id"; // เตรียมคำสั่ง SQL
  $query = mysqli_query($dbcon, $sql); // สั่งให้หาข้อมูลในฐานข้อมูล ข้อมูลที่ได้จะเป็นแบบ [Array]
  if($query) {
      $_SESSION['username'] = $username;
      echo "<script type='text/javascript'>alert('แก้ไขข้อมูลสำเร็จ');</script>";
  }
  else echo "<script type='text/javascript'>alert('เกิดข้อผิดพลาด แก้ไขข้อมูลไม่สำเร็จ');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
      }
      body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        background: linear-gradient(135deg, #fdecec, #ffe8d9);
      }
      .container{
        max-width: 700px;
        width: 100%;
        background-color: #fff;
        padding: 25px 30px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.15);
      }
      .container .title{
        font-size: 25px;
        font-weight: 500;
        position: relative;
      }
      .container .title::before{
        position: absolute;
        left: 0;
        height: 3px;
        width: 30px;
        border-radius: 5px;
        background: linear-gradient(135deg, #ffcca9, #ffe8d9);
      }
      .content form .user-details{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
      }
      form .user-details .input-box{
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
      }
      form .input-box span.details{
        display: block;
        font-weight: 500;
      }
      .user-details .input-box input{
        height: 50px;
        width: 100%;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
        padding-left: 15px;
        border: 1px solid #ccc;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
      }
      .user-details .input-box input:focus,
      .user-details .input-box input:valid{
        border-color: #fb6600;
      }
      form .gender-details .gender-title{
        font-size: 20px;
        font-weight: 500;
      }
      form .category{
        display: flex;
        width: 80%;
        margin: 14px 0 ;
        justify-content: space-between;
      }
      form .category label{
        display: flex;
        align-items: center;
        cursor: pointer;
      }
      form .category label .dot{
        height: 18px;
        width: 18px;
        border-radius: 50%;
        margin-right: 10px;
        background: #d9d9d9;
        border: 5px solid transparent;
        transition: all 0.3s ease;
      }
      #dot-1:checked ~ .category label .one,
      #dot-2:checked ~ .category label .two,
      #dot-3:checked ~ .category label .three{
        background: #fb6600;
        border-color: #d9d9d9;
      }
      form input[type="radio"]{
        display: none;
      }
      form .button{
        height: 100%;

      }
      form .button{
        position: absolute;
        top: 57%;
        left: 61%;
        margin-top: 4px;
        margin-bottom: 10px;
        height:35px;
        width: 30%;
        border-radius: 5px;
        border: none;
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, #fb6600, #f94a3d);
      }
      form .button:hover{
        /* transform: scale(0.99); */
        background: linear-gradient(-135deg, #fb6600, #f94a3d);
        }
      @media(max-width: 584px){
      .container{
        max-width: 100%;
      }
      form .user-details .input-box{
          margin-bottom: 15px;
          width: 100%;
        }
        form .category{
          width: 100%;
        }
        .content form .user-details{
          max-height: 300px;
          overflow-y: scroll;
        }
        .user-details::-webkit-scrollbar{
          width: 5px;
        }
        }
        @media(max-width: 459px){
        .container .content .category{
          flex-direction: column;
        }
      }
      .button-1{
        position: absolute;
        top: 57%;
        left: 9%;
        margin-top: 4px;
        margin-bottom: 10px;
        height:35px;
        width: 30%;
        border-radius: 5px;
        border: none;
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, #fb6600, #f94a3d);
      }
      .button-1:hover{
        background: linear-gradient(-135deg, #fb6600, #f94a3d);
      }
    </style>
</head>
<body>
    <div class="container">
    <div class="title">เปลี่ยนชื่อ</div>
    <div class="content">
      <form  method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">เปลี่ยนชื่อ</span>
            <input type="text" placeholder="" required name="username" value="<?php echo $_SESSION['username'] ?>">
          </div>
        </div>
      <button class="button" type="submit" name="submit">เปลี่ยนชื่อ</button>
      </form>
      <a href="../manage.php"><button class="button-1" >กลับ</button></a>
    </div>
    </div>
</body>
</html>