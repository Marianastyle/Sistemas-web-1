<?php
$numero = 12345;
$numero_texto = (string)$numero;
$tamanho = strlen($numero_texto);
echo "Numero original: " .$numero . "<br>";
echo "Numero invertido: ";

for ($i = $tamanho -1; $i >= 0; $i--) {
    echo $numero_texto[$i];
}

?>