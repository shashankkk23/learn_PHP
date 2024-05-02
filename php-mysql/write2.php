
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create user</title>
</head>
<body>
<?php 
include("./config.php");
if(isset($_POST['name'])){
    $name = $_POST['name']; 
    $address = $_POST['address']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone'];
    
    $query = $conn->prepare("INSERT INTO `user`(`name`,`address`,`email`,`phone`)VALUES('$name','$address','$email','$phone')");
    $data = $query->execute();
    if($data){
        echo "user created successfully";
        header('location:read.php');
        exit();
    }else{
        echo "something went wrong";
    }
}
?>

    <form action="" method="post">
    <input type="text" placeholder="EnterName" name="name">
    <br>
    <br>
    <input type="text" placeholder="EnterAddress" name="address">
    <br>
    <br>
    <input type="text" placeholder="EnterEmail" name="email">
    <br>
    <br>
    <input type="text" placeholder="EnterPhone" name="phone">
    <br>
    <br>
    <button>Add User</button>
    </form>




</body>
</html>
