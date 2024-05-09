<?php
$sexo = 1;
$altura = 1.85;

if ($sexo == 1 ) {
    $pesoideal = (72.7 * $altura) - 58;
    
}
 else {
    $pesoideal = (62.1* $altura) - 44.7;
}
echo "seu peso ideal é ".$pesoideal;
?>
