<?php
include_once("../../php/dbcon.php");
$statusmsg = "";
//file upload path
$targetdir = "upload/";

if(isset($_POST['submit'])){
    if(!empty($_FILES["file"] ["name"])){
        $filename = basename($_FILES["file"]["name"]);
        $targetFilepath = $targetdir . $filename;
        $filetype = pathinfo($targetFilepath, PATHINFO_EXTENSION);

        //allow cartain file formats
        $allowtype = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if(in_array($filetype , $allowtype)){
            if(move_uploaded_file($_FILES['file'] ['tmp_name'] , $targetFilepath)){
                $insert = $dbcon->query("INSERT INTO user(file_name , uploaded_on) VALUES('" . $filename . "',NOW())");
                if($insert){
                    $statusmsg = "the file <b> " . $filename . "</b> has been uploaded succesessfully";
                }else{
                    $statusmsg = "file upload failed , please try again.";
                    header("location: changeprofile.php");
                }
            }else{
                $statusmsg = "sorry, there was an erorr uploading your fle.";
                header("location: changeprofile.php");
            }
        }else{
            $statusmsg = "Sorry, only JPG , JPEG ,PNG ,&GIF file are allowed to upload.";
            header("location: changeprofile.php");
        }
    }else{
        $statusmsg = "Please select a file to upload.";
        header("location: changeprofile.php");
    }
}

?>