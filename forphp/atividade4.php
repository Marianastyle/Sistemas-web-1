<?php

$numeros =[1, 2, 3, 4, 5, 6, 7, 8];


$maior = $numeros[0];


for ($i = 1; $i < count($numeros); $i++) {
    
    if ($numeros[$i] > $maior) {
        $maior = $numeros[$i];
    }
}


echo "O maior número é: " . $maior;
?>
