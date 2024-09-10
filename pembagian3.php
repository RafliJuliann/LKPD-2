<?php
$b = 90;
for ($i = 1; $i <= 30; $i++) {
    if (90 % $i == 0) {
        echo $b . " : " . $i . " = ".($b / $i);
        echo "<br>";
    }
}
?>