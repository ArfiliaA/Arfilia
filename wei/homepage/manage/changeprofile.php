<?php
include_once("../../php/dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php upload image system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                     <div class="text-center justify-content-center align-items-center p-4 border-2 border-dashed rounded-3">
                        <h6 class="my-2">Select image file to upload</h6>
                        <input type="file" name="file" class="form-control streched-link" accept="image/gif , image/jpeg , image/png">
                        <p class="small mb-0 mt-2"> Only JPG .jpeg ,PNG & GIF files are allowed to upload</p>
                     </div>
                     <div class="d-sm-flex justify-content-end mt-2">
                        <input type="submit" name="submit" value="upload" class="btn btn-sm btn-primary mb-3" required>
                     </div>
                </form>
            </div>
        </div>
        <div class="row">
            <?php if(!empty($statusmsg)){ ?>
                <div class="alert alert-secondary" role="alert">
                    <?php echo $statusmsg; ?>
                </div>
            <?php } ?>
        </div>
        <div class="row g-2">
            <?php
                $query = $dbcon->query("SELECT * FROM user ORDER BY uploaded_on DESC");
                if($query->num_rows > 0){
                    while($row = $query->fetch_assoc()){
                        $imageurl = 'upload/'.$row['file_name'];
                        ?>
                        <img src="<?php echo $imageurl?>" alt="" width="100%" class="card-img">
                        
                <?php
                    } 
                }else{ ?>
                <p>NO image founded...</p>
                <?php }?>
        </div>
    </div>
</body>
</html>