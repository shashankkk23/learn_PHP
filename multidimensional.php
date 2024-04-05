<?php
//2d array is same
//ek arrayv ke andar aur array hote hai usko multidimensional array bolte hai

$users = [
    [1, "tiwari", "borvali"],
    [2, "gaurav", "virar"],
    [3, "shashank", "mumbai"]
];

// echo "<pre>";
// print_r($users);
// echo "<pre>";

for($i = 0; $i < count($users); $i++){
// echo $i;
for($j = 0; $j < count($users[$i]); $j++){
    echo $users[$i][$j];
    echo "<br>";
}
}


?>