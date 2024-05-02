<?php
    $idade_minima = 18;
    if ($idade_minima >=18){
        echo"pode entrar";
    }
    else{
        echo "vai ficar de fora";
    }

//operador ternario 
    echo ($idade_minima >=18)? "pode entrar" : "vai ficar de fora";

//operadores logicos 
$x = 5;
$y= 11;
$z = 15;

if(($x >0 and $y < 15) or $z != 15){
    echo "verdadeiro<br>";
}else{
    echo "falso";
}

if( $x < 0 or $z > 15){
    echo "verdadeiro<br>";
}
else{
        echo "falso<br>";
    }


if(!($y == 10)){
    echo "condição3 verdadeira";
}

?>