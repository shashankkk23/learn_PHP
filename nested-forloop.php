<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";

}

echo "<hr>";

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}

echo "<hr>";

$n = 4;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n - $i + 1; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>