<form action="" method="post">
<input type="text" placeholder="Enter Name To Search" name="search" >
<br>
<br>
<button>Search</button>
</form>


<?php
include ("./config.php");
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $searchUser = $conn->prepare("SELECT * FROM user WHERE name like '%$search%'");
    $searchUser->execute();
    $data = $searchUser->fetchAll();

    echo "<table border='5'>";
    foreach ($data as $result) {

        echo "<tr>
        <td>" . $result['name'] . "</td>
        <td>" . $result['Address'] . "</td>
        <td>" . $result['Email'] . "</td>
        <td>" . $result['Phone'] . "</td>
        </tr>";
    }

}

echo "</table>";

?>