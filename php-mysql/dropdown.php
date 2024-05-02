<?php  
include("./config.php");
$getData = $conn->prepare("SELECT SN,name from user");
$getData->execute();
$data = $getData->fetchAll();


echo "<select>";
echo "<option>Select Name</option>";
foreach($data as $name){
    echo "<option value= ".$name['SN'].">".$name['name']."</option>";
}
echo "</select>";

?>