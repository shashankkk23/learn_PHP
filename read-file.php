<?php 
// $file = "files/shashank.txt";
// $open = fopen($file,"r") or die("unable to read file");
// echo fread($open,filesize($file));
// fclose($open);

if(isset($_FILES['file'])) {
    $file = $_FILES['file']['tmp_name'];
    $openFile = fopen($file,"r") or die("Unable to read file");
    echo fread($openFile, filesize($file));
    fclose($openFile);
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <br>
    <button type="submit">Open</button>
</form>
