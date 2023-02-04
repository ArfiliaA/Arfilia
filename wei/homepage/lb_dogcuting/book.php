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
    <title>Document</title>
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
        .button-4 {
        background-clip: padding-box;
        background-color: #fa6400;
        border: 1px solid transparent;
        box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
        box-sizing: border-box;
        color: #fff;
        display: inline-flex;
        font-size: 30px;
        font-weight: 100%;
        justify-content: center;
        padding: calc(.875rem - 1px) calc(1.5rem - 1px);
        text-decoration: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: baseline;
        opacity: 0.9;
        position: absolute;
        width: 90%;
        bottom: 0;
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
                <td></td>
            </tr>
        </tbody>
    </table>
    <h2>คิวของคุณคือคิวที่</h2>

    <a href="../homepage.php" class="button-4">กลับหน้าหลัก</a>

</body>
</html>