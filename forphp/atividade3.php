<?php

$listanum = [1, -2, 3, 4, 5, 6, -7, 8, 9, 0];


$positivos = 0;
$negativos = 0;
$zeros = 0;


for ($i = 0; $i < 10; $i++) {
    if ($listanum[$i] > 0) {
        $positivos++;
    } elseif ($listanum[$i] < 0) {
        $negativos++;
    } else {
        $zeros++;
    }
}


echo "Quantidade de positivos: " . $positivos . "\n";
echo "<br>";
echo "Quantidade de negativos: " . $negativos . "\n";
echo "<br>";
echo "Quantidade de zeros: " . $zeros . "\n";
?>
