<?php

$soma = 0;

for ($i = 1; $i <= 50; $i += 2) {
    echo $i . "<br>";
    $soma += $i;
}

echo "A soma total é: " . $soma;

?>