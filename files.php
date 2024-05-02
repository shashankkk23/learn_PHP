<?php 
#create file
if(isset($_POST['filename'])){
    $fileName= "files/".$_POST['filename'];
    $content = $_POST['content'];
    $file = fopen($fileName, "w") or die("unable to create file");
    fwrite($file,$content);
    fclose($file);
    echo "file created successfull";
}






?>


<form action="" method="post">
    <input type="text" name="filename" placeholder="enter FileName to be created">
    <br>
    <br>
    <textarea name="content" cols="30" rows="10" placeholder="enter some file content"></textarea>
    <br>
    <br>
    <button>Create File</button>
</form>