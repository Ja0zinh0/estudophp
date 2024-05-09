<?php
$sexo = "masculino";
$altura = 1.85;

if ($sexo == "masculino") {
    $pesoideal = (72.7 * $altura) - 58;
    echo "seu peso ideal é ". $pesoideal;
}
elseif ($sexo == "feminino") {
    $pesoideal = (62.1* $altura) - 44.7;
}
?>