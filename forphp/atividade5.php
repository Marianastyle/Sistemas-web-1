<?php

$numeros =[1, 2, 3, 4, 5, 6, 7, 8];


$menor = $numeros[0];


for ($i = 1; $i < count($numeros); $i++) {
    
    if ($numeros[$i] < $menor) {
        $menor = $numeros[$i];
    }
}


echo "O menor número é: " . $menor;
?>
