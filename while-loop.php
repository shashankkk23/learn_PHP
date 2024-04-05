<?php
//while loop
$i = 0;
while ($i < 10) {
    echo $i . "<br>";
    $i += 3;
}

echo "<hr>";
//while loop
$num = 10;
while ($num > 0) {
    echo $num;
    echo "<br>";
    $num--;
}

echo "<hr>";

//do while
$num = 1;
do {
    echo $num;
    echo "<br>";
    $num++;
} while ($num <= 0);

echo "<hr>";

$neg = 10;
do{
    echo  "the negavtive value is $neg";
    echo "<br>";
    $neg--;
} while($neg >= 0);



?>