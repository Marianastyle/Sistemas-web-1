<?php
$numero = 6;
$soma = 0;

for ($i = 1; $i < $numero; $i++) {
    if ($numero % $i == 0) {
        $soma += $i;
    }
}

if ($soma == $numero) {
    echo "O numero $numero é perfeito ";

}else {
    echo "O numero $numero não é perfeito";
}


?>