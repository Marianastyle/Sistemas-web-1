<?php

$tabuada_numero =2;
$contador= 1;
while ($contador <= 10) {
    $resultado = $tabuada_numero * $contador;
    echo "{$tabuada_numero} . {$contador} = {$resultado} <br>";
    $contador++;
}

?>