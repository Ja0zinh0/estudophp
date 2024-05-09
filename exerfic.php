<?php
// ajuste salario
$salario = 1500;

if($salario <=200){
    $percentual =20;
}elseif($salario <= 700){
    $percentual = 15;
}elseif($salario <= 1500){
    $percentual =10;
}else{
    $percentual = 5;
}
$aumento = $salario *($percentual/100);
$novo_salario = $salario + $aumento;
echo"salario antes do reajuste R$ ".number_format($salario,2,",","."),"<br>";
echo"percentual de aumento aplicado ".$percentual."<br>";
echo"valor do aumento R$".number_format($aumento,2,",","."),"<br>";
echo"novo salario R$ ".number_format($novo_salario,2,",",".");
?>