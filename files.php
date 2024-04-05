<?php 
// print_r($_FILES);
if($_FILES['fileUpload']){
    $path = $_FILES['fileUpload']['name'];
    echo $path;
    $uploadPath = "./uploadpath/".$path;
    move_uploaded_file($_FILES['fileUpload']['temp_name'],$uploadPath) || die("failed to upload");
}
    else{
        die("no file Found");
    }



    ?>