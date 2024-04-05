<html>
    <head>
        <title>Table arrray</title>
    </head>
    <table border='1'>  



    <?php
    $users = [
        [1, "shashank", "shashank@gmail.com"],
        [2, "gaurav", "gaurav@gmail.com"],
        [3, "chandaal chandu", "shashank@gmail.com"],
        [4, "chandu chai", "chandu chai@gmail.com"],
        [5, "chandu", "chandu@gmail.com"],
    ];
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>sr no </td>";
    echo "<td>name </td>";
    echo "<td>email Id </td>";
    echo "</tr>";
    for ($i = 0; $i < count($users); $i++) {
        echo "<tr>";
        for ($j = 0; $j < count($users[$i]); $j++) {
            echo "<td>";
            echo $users[$i][$j] . "<br>";
            echo "</td>";
        }
        echo "</tr>";
    }

    echo "</table"

        ?>

</html>