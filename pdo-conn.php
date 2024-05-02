<?php

$host = "localhost";
$username = "root";
$password = null;
$dbname = 'users';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Database connected successfully";

}catch(ErrorException $err){
    echo "something went wrong".$err->getMessage();
}

echo '<br>';

$result= $conn->query("select * from user");
while($row = $result->fetch(PDO::FETCH_NUM)){
    print_r($row);
}


?>