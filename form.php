<?php 
// print_r($_POST);
if(isset($_POST['name'])){
echo "User's Name is: " . $_POST['name'];
echo "<br>";
echo "User's Passsword is: " . $_POST['password'];
echo "<br>";
echo "User's Skills are: " . implode(", ",$_POST['skills']);
echo "<br>";
echo "User's Gender is: " . $_POST['gender'];
echo "<br>";
echo "User's City is: " . $_POST['city'];
echo "<br>";
echo "User's Bio is: " . $_POST['bio'];
echo "<br>";


}
?>