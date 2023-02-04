<?php
session_start();
date_default_timezone_set("Asia/bangkok");
$time = date("h:i:sa");
$date = date("d/m/y");
$TIME = $time ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองคิว</title>
    <style>
        body{
            background: linear-gradient(135deg, #fdecec, #ffe8d9);
        }
        h2{
            font-size: 30px;
            align-items: center;
            text-align: center;
        }
        table{
            align-items: center;
            table-layout: fixed;
            width: 100%;
            border: 1px solid black;
            text-align: center;
        }
        th{
            font-size: 20px;
        }
        tr{
            font-weight: 300;
        }
        .button-5 {
        height: 20px;
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
        font-size: 20px;
        font-weight: 100%;
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
        width: 42%;
        height: 20px;
        opacity: 0.9;
        position: absolute;
        right:    0;
        bottom:   0;
        margin: 10px;
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
        .button-4 {
        height: 20px;
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
        font-size: 20px;
        font-weight: 100%;
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
        width: 30%;
        opacity: 0.9;
        position: absolute;
        left: 0;
        bottom:0;
        margin: 10px;
        }

        .button-4:hover,
        .button-4:focus {
        background-color: #fb8332;
        box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
        }

        .button-4:hover {
        transform: translateY(-1px);
        }

        .button-4:active {
        background-color: #c85000;
        box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
        transform: translateY(0);
    
        }
    </style>
</head>
<body>

    <!-- qr code -->
    <table>
        <thead>
            <tr>
                <th>เวลา</th>
                <th>วันที่</th>
                <th>ร้าน</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $TIME; ?></td>
                <td><?php echo $date; ?></td>
                <td>ร้าตัดแต่งขนสุนัข</td>
            </tr>
        </tbody>
    </table>
    <h2>คิวที่คุณจะได้</h2>
    <h2><?php echo $session['id']; ?></h2>

    <a href="lb_dog.php" class="button-4">กลับ</a><br>
    <a href="book.php" class="button-5">จองคิว</a>
</body>
</html>