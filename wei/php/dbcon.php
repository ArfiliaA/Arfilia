<?php
    $hostname = "localhost"; // IP เครื่องเซิฟเวอร์ ที่ติดตั้งฐานข้อมูล
    $username = "root"; // Username เข้าฐานข้อมูล Default = root
    $password = ""; // Password เข้าฐานข้อมูล Deafult = ว่าง;
    $database = "register_db"; // ชื่อฐานข้อมูล (ที่เราสร้างไว้)


    $dbcon = mysqli_connect($hostname, $username, $password, $database); // เชื่อมต่อฐานข้อมูล
    if($dbcon->connect_error){
    die("conection failed:" . $dbcon->connect_error);
    }
    date_default_timezone_set("Asia/Bangkok"); // ตั้งเขตเวลาของฐานข้อมูล
    // error_reporting(0); // ปิด Warning
?>