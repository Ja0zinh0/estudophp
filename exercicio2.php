<?php
//primeira questão
    $numero1 = 3;
    $numero2 = 34;

    if($numero1>$numero2){
        echo "$numero1 é maior que $numero2";
    }
    elseif($numero1==$numero2){
        echo "$numero1 é igual a $numero2";
    }
    else{
        echo "numero $numero1 é menor que $numero2<br>";
    }
    //segunda questão
    $ano_nascimento =2006;
    $ano_atual = 2024;
    $idade = $ano_atual - $ano_nascimento;
    if($idade>=18){
        echo "Você pode votar<br>";
    }
    else{
        echo "Você não pode votar<br>";
    }
    // terceira questão
    $senha = 1234;

    if ($senha == 1234){
        echo "senha correta";
    }
    else{
            echo "senha incorreta";
        }

    //quarta questão
    $preco1 = 0.30;
    $preco2 = 0.25;
    $macas_compradas = 2; 

    if ($macas_compradas < 12) {
        $total = $preco1 * $macas_compradas; 
        echo "O valor total das compras deu ".$total."R$";
    } elseif ($macas_compradas >= 12) { 

        $total2 = $preco2 * $macas_compradas; 
        echo "O valor total das compras deu ".$total2."R$";    
        
    }
?>
