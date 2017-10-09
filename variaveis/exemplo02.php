<?php
//Variáveis Simples
$nome = "Quarto Duplo";
$site = 'www.republicadoclaudinho.com';

$mensalidade = 425;
$salario = 5500.99;
$ocupado = true;
///////////////////////////////////////////

//Variáveis complostas
$fruta = array("tomate","abacate",123,true);
echo $fruta[1];

echo "<br>";

$horaHoje = new DateTime();
//var_dump($horaHoje);

$arquivo = fopen("exemplo02.php", "r");
//var_dump($arquivo);

$nulo = null;

?>