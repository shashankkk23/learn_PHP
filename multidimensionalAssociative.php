<?php
$users = [
    ["name" => "shashank", "email" => "shashank@gmail.com", "age" => "23"],
    ["name" => "gaurav", "email" => "gaurav@gmail.com", "age" => "23"],
    ["name" => "tiwari", "email" => "tiwari@gmail.com", "age" => "23"]
];

foreach($users as $data){
    foreach($data as $key=>$item){
        echo $key." is ".$item;
        echo "<br>";
    }
 }

//printing in table
echo "<table border='1' >";
echo "<tr>";
foreach($users as $data){
    foreach($data as $key=>$item){
       echo "<td>";

       echo $key." is ".$item;
echo "<td>";


   }
echo "</tr>";

}

echo "</table>";

?>