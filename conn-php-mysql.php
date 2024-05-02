<?php
$host = "localhost";
$username = "root";
$password = null;
$dbname = "users";


$conn = new mysqli($host,$username,$password,$dbname);
if($conn-> connect_error){
    die ("connection failed".$conn->connect_error);
}

echo "connection succesfull";
echo "<br>";
 echo "<hr>";


 $result = $conn->query("select * from user")->fetch_all();
//  $str = explode($result);
 print_r($result);
?> 