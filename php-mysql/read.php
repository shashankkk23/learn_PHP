<?php 
include("./config.php");
$getuser = $conn->prepare("select * from user");
$getuser->execute();
$users = $getuser->fetchAll();

echo "<table border='5px gray'>";
echo "<tr>
<th>SN</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Address</th>
</tr>";
foreach($users as $user){
  echo "<tr>
  <td>".$user['SN']."</td>
  <td>".$user['name']."</td>
  <td>".$user['Address']."</td>
  <td>".$user['Email']."</td>
  <td>".$user['Phone']."</td>
  </tr>";
}
echo "</table>";

?>