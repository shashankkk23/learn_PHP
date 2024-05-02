<?php
include("./config.php");

$data = $conn->prepare("SELECT * FROM user");
$data->execute();
$users = $data->fetchAll();

echo "<table border='2'>";

foreach ($users as $user) {

    echo "<tr>
<td>" . $user['SN'] . "</td>
<td>" . $user['name'] . "</td>
<td>" . $user['Address'] . "</td>
<td>" . $user['Email'] . "</td>
<td>" . $user['Phone'] . "</td>
<td><form method='post'><button name='delete' value=" . $user['SN'] . ">Delete</button></form></td>


<td><a href='update.php?SN=".$user['SN']."'>edit</a></td>
</tr>";
}

echo "</table>";
if (isset($_POST['delete'])) {
    $SN = $_POST['delete'];
    $users = $conn->prepare("DELETE FROM user WHERE SN = '$SN'");
    
    if ($users->execute()) {
        echo "userDeleted successfully...";
        
        
    } else {
        echo "something went Wrong please try again later";
    }
}
?>