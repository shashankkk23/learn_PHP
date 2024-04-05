<?php 
$num = [1,2,34,5,6,7,8,9];

// array_push($num, 4,65,68,78,12,"shashank");

// array_pop($num);
array_splice($num, -4); //removing 4 element
echo "<pre>";
print_r($num);
echo "</pre>";


?>