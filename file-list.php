<?php 
//single aur double dot bhi aate hai sathme array_diss() fnc use krke remove krte hai
$path = "files";
$data = scandir($path);
$data= array_diff($data, array(".", ".."));
// print_r($data);
foreach($data as $items){
    echo "<a href=./files/$items>$items</a>";
    echo "<br/>";
}
?>