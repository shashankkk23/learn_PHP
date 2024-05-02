<?php 
// json - is ,mainly used to exchange data from one device to other server to web-appp 
// json - it is a text-based data exchange formate for structuring data 

// $user = ["name"=>"shashank","age"=>"24", "email"=>"shashank@gmail.com"];
// $jsonUser = json_encode($user);
// // print_r($user);
// echo $jsonUser;

$data= '{"name":"shashank","age":"24","email":"shashank@gmail.com"}';
//agar true nhi likhenge to object class ban ke aayegi
$arrayData = json_decode($data,true);
print_r($arrayData);
?>