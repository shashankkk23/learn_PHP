<form action="" method="post">
<input type="text" placeholder="EnterName" name="name">
<br>
<br>
<input type="text" placeholder="EnterAddress" name="Address">
<br>
<br>
<input type="text" placeholder="EnterEmail" name="Email">
<br>
<br>
<input type="text" placeholder="EnterPhoneNumber" name="Phone">
<br>
<br>

<button type ="submit">Create New User</button>
</form>

<?php 
include("./config.php");

if(isset($_POST['name'])){
$name = $_POST['name'];
$address = $_POST['Address'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];

$query = $conn->prepare("INSERT INTO `user`(`name`,`address`,`email`,`phone`)VALUES('$name','$address','$email','$phone')");
$result= $query->execute();
if($result){
    echo "user inserted successfully";
    header('lcoation:read.php');
    exit();
}else{
    echo "somthing went wrong";
}
}
?>