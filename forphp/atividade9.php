<?php
$numero = 10;
$quantidadedivisores = 0;
for ($i =1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
        $quantidadedivisores++;
    }
}
echo "Numero: " .$numero . "<br>";
echo "Quantidade de divisores: " . $quantidadedivisores;
?> 