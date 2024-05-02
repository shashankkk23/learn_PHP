<?php 
include("./config.php");
if(isset($_GET['SN'])){
 $id= $_GET['SN'];
 $getUser = $conn->prepare("select * from user where SN = '$id'");
 $getUser->execute();
 $user = $getUser->fetchAll();

 echo "<pre>";
 $name = ($user[0]['name']);
 $address = ($user[0]['Address']);
 $email = ($user[0]['Email']);
 $phone = ($user[0]['Phone']);
}
?>

<form action="" method="post">
<input type="text" value="<?php echo $name ?>" name="name">
<br>
<input type="text" value="<?php echo $address ?>" name="Address">
<br>
<input type="text" value = "<?php echo $email?>" name="Email">
<br>
<input type="text" value = "<?php echo $phone ?>" name="Phone">
<br>
<button value="<?php echo $id ?>" name="update">Update</button>
</form>

<?php  
if(isset($_POST['update'])){
    $id=  $_POST['update'];
    $name=  $_POST['name'];
    $address=  $_POST['Address'];
    $email=  $_POST['Email'];
    $phone=  $_POST['Phone'];

$updateUser = $conn->prepare("update user 
set name='$name', 
 address='$address', 
 email= '$email', 
 phone='$phone' 
where SN = '$id'");

if($updateUser->execute()){
    header('location:delete-edit.php');
    exit();
}else{
    echo "something went wrong";
}
// $update = $updateUser->fetchAll();
}
?>