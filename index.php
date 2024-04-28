<!-- e necessario ter um servidor -->
<!-- servidor mais utilizado APACHE -->
<!-- o nome do arquivo sempre tem que ser index -->
<!-- o php pode ser trabalhado junto com o html -->

<?php

    echo $valor = "alessandro<br>";
    echo $valor = 10;

    $valor = "Alessandro"; //para fazer uma string 
    $valor = 10; echo "<br>"; //para fazer uma variavel inteira

    echo $valor = "joão "; echo "<br>";// para imprimir na tela a variavel

    //operações aritimeticas 
    $valor1 = 20;
    $valor2 = 10;
    $soma = $valor1 + $valor2;
    $sub = $valor1 - $valor2;
    $divisao = $valor2 / $valor1;

    echo "O valor da soma de" .$valor1. "+" .$valor2. "=" .$soma;echo "<br>"; // para concatenar e necessario colocar um . na variavel 
    
    echo "O valor da subtração de" .$valor1. "-" .$valor2. "=" .$soma; echo "<br>";
    echo "o valor da divisão de " .$valor1. "/" .$valor2. "=" .$divisao;


?>