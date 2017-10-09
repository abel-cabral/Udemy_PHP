<?php
$a = 10;//Variavel é uma coisa, parametro de função é outra.
function trocaValor(&$b){//O uso do & significa o que ocorrer na funcção vai alterar a variavel.
    $b=50;
    return $b;
}
echo trocaValor($a)."<br>";//aqui jogamos $a no lugar do parametro $b, assim mudando seu valor.
echo $a;
?>