<?php
// $x = 20;
// echo "before condition <br>";
// if ($x == 20) {
//     goto jump;
// }
// echo "after condition ";
// $name = "shashank";
// echo $name;

// // Define the label 'jump'
// jump:
// echo "this is goto statement execution";

echo "<hr>";

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
    if ($i == 9) {
        goto loopBreak;
    }
}


loopBreak;
echo "outside of loop";
?>

