<?php
$numero = 10;

echo "divisores de $numero : <br>";

for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        echo "$i <br>";
    }
}
?>