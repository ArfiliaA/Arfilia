<?php
    require_once "../php/dbcon.php";
    session_start();
    if(empty($_SESSION['id'])) { // ถ้ายังไม่เคย Login ให้กลับไปหน้า Login
        header("refresh:0;url=../login.php");
    } 
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }
        .heading {
        text-align: center;
        }
        .heading__title{
            color:#FF6800;
            
        }
        .heading__link {
        text-decoration: none;
        }

        .heading__credits .heading__link {
        color: white;
        }

        .cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        }

        .card {
        margin: 10px;
        padding: 20px;
        display: grid;
        grid-template-rows: 20px 50px 1fr 50px;
        border-radius: 10px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.25);
        transition: all 0.2s;
        }

        .card:hover {
        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
        transform: scale(1.01);
        }

        .card__link,
        .card__exit,
        .card__icon {
        position: relative;
        text-decoration: none;
        color: rgba(255, 255, 255, 0.9);
        }

        .card__link::after {
        position: absolute;
        top: 25px;
        left: 0;
        content: "";
        width: 0%;
        height: 3px;
        background-color: rgba(255, 255, 255, 0.6);
        transition: all 0.5s;
        }

        .card__link:hover::after {
        width: 100%;
        }

        .card__exit {
        grid-row: 1/2;
        justify-self: end;
        }

        .card__icon {
        grid-row: 2/3;
        font-size: 30px;
        }

        .card__title {
        grid-row: 3/4;
        font-weight: 400;
        color: #FF6800;
        font-size: 40px;
        font-weight: bold;
        }

        .card__apply {
        grid-row: 4/5;
        align-self: center;
        }
        
        .card-1 {
        background:white;
        }

        @media (max-width: 1600px) {
        .cards {
            justify-content: center;
        }
        }
        .button-5 {
        align-items: center;
        background-clip: padding-box;
        background-color: #fa6400;
        border: 1px solid transparent;
        border-radius: .25rem;
        box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-flex;
        font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 30px;
        font-weight: 600;
        justify-content: center;
        line-height: 1.25;
        margin: 0;
        min-height: 3rem;
        padding: calc(.875rem - 1px) calc(1.5rem - 1px);
        position: relative;
        text-decoration: none;
        transition: all 250ms;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: baseline;
        height: 40px;
        width: 100%;
        opacity: 0.9;
        }

        .button-5:hover,
        .button-5:focus {
        background-color: #fb8332;
        box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
        }

        .button-5:hover {
        transform: translateY(-1px);
        }

        .button-5:active {
        background-color: #c85000;
        box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
        transform: translateY(0);
        }
            </style>
</head>
<body>
    <div class="main-container">
    <div class="heading">
        <!-- <h1 class="heading__title">เลือกจอง</h1> -->
    </div>
    <div class="cards">
        <div class="card card-1">
            <img src="../images/cutingdog.jpg" alt="" width="350px" height="350px">
            <div class="card__icon"><i class="fas fa-bolt"></i></div>
            <p class="card__exit"><i class="fas fa-times"></i></p>
            <h2 class="card__title">ร้านตัดแต่งขนสุนัข</h2>
            <p class="card__apply">
            </p>
            <br>
            <a class="button-5" href="lb_dogcuting/lb_dog.php">จองคิว</a>
                            
        </div>
        <div class="card card-1">
            <img src="../images/cake.jpg" alt="" width="350px" height="350px">
            <div class="card__icon"><i class="fas fa-bolt"></i></div>
            <p class="card__exit"><i class="fas fa-times"></i></p>
            <h2 class="card__title">ร้านเค้ก</h2>
            <p class="card__apply">
                <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a>
            </p>
            <br>
            <button class="button-5" role="button">จองคิว</button>
        </div>
        <div class="card card-1">
            <img src="../images/crinic.jpg" alt="" width="350px" height="350px">
            <div class="card__icon"><i class="fas fa-bolt"></i></div>
            <p class="card__exit"><i class="fas fa-times"></i></p>
            <h2 class="card__title">คลินิกเอกชน</h2>
            <p class="card__apply">
                <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a>
            </p>
            <br>
            <button class="button-5" role="button">จองคิว</button>
        </div>
        <div class="card card-1">
            <img src="../images/sukreed.jpg" alt="" width="350px" height="350px">
            <div class="card__icon"><i class="fas fa-bolt"></i></div>
            <p class="card__exit"><i class="fas fa-times"></i></p>
            <h2 class="card__title">ร้านซักรีด</h2>
            <p class="card__apply">
                <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a>
            </p>
            <br>
            <button class="button-5" role="button">จองคิว</button>
        </div>
        <div class="card card-1" style="margin-bottom: 100px;">
            <img src="../images/carcare.jpg" alt="" width="350px" height="350px">
            <div class="card__icon"><i class="fas fa-bolt"></i></div>
            <p class="card__exit"><i class="fas fa-times"></i></p>
            <h2 class="card__title">คาแคร์</h2>
            <p class="card__apply">
                <a class="card__link" href="#">Apply Now <i class="fas fa-arrow-right"></i></a>
            </p>
            <br>
            <button class="button-5" role="button">จองคิว</button>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
    <?php require_once("navbar_H.php");?> 
    
</body>
</html>