<?php 
// associative array 
// associative array ke andar key hoti hai eg. "name" => "shashank"


$user = [
"name"=>"shashank", 
"age"=> 23, 
"city"=>"Mumbai",
"email"=>"shashank@gmail.com"];

// echo $user["name"];

foreach($user as $key => $data){
    echo $key." is ".$data."<br>";
}

// foreach($user as $key => $data);
//     echo $key." is ".$data."<br>";
// endforeach;

?>