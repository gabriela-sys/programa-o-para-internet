<?php

$numero = 5;
$fatorial = 1;

for ($i = $numero; $i >= 1; $i--) {
    $fatorial = $fatorial * $i;
}

echo $numero . "! = " . $numero;

for ($i = $numero - 1; $i >= 1; $i--) {
    echo " x " . $i;
}

echo " = " . $fatorial;

?>