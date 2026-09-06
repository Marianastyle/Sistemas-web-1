<?php
$number= 4;
$fatorial= 1;
$contador= $number;
while ($contador > 1 ) {
   $fatorial *= $contador ;
   $contador--;
}
   echo "O fatorial do número $number é: $fatorial.";

?>