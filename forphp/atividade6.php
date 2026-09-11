<?php
$numero = 12345;
$numero_texto = (string)$numero;
$soma = 0;

for ($i = 0; $i < strlen($numero_texto); $i++) {
    $soma += $numero_texto[$i];
}

echo "A soma dos dígitos é: " . $soma;
?>