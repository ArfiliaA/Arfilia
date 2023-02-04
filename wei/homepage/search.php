<?php
    require_once "../php/dbcon.php";
    session_start();
    if(empty($_SESSION['id'])) { // ถ้ายังไม่เคย Login ให้กลับไปหน้า Login
        header("refresh:0;url=admin-login.php");
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        #namanyay-search-btn {
        background:#0099ff;
        color:white;
        font: 'trebuchet ms', trebuchet;
        padding:10px 20px;
        border-radius:0 5px 5px 0;
        -moz-border-radius:0 5px 5px 0;
        -webkit-border-radius:0 5px 5px 0;
        -o-border-radius:0 5px 5px 0;
        border:0 none;
        font-weight:bold;
        margin-top: 7.4px;
        position: absolute;
        height: 40px;
        top: 3px;
        position: absolute;
        left: 82%;
        }
        
        #namanyay-search-box {
        margin-left: 10px;
        margin-top: 10px;
        background: white;
        border-radius:5px 0 0 5px;
        -moz-border-radius:5px 0 0 5px;
        -webkit-border-radius:5px 0 0 5px;
        -o-border-radius:5px 0 0 5px;
        border:0 none;
        position: absolute;
        left: 5px;
        right: 20px;
        height: 40px;
        width:80%;
        }
    </style>
</head>
<body> 
    <form id="searchthis" action="/search" style="display:inline;" method="get">
        <input id="namanyay-search-box" name="q" size="40" type="text" placeholder="ค้นหาร้านที่คุณต้องการ"/>
        <input id="namanyay-search-btn" value="   ค้นหา     " type="submit"/>
    </form>
    <?php require("navbar_S.php") ?>
</body>
</html>
