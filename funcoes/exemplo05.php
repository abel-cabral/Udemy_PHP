<?php
function mundo($texto="Dor"){//aqui vc pode atribuir um valor padrao na variavel
    return "Cada dia que vivo é uma $texto";
}
function marte($vida,$sol="Faz Calor"){//Quando nao definido o valor padrao do argumento, vai dar erro, deve ser definido. 
    return $vida.$sol;
}

echo marte("Em marte ")."</br>";






echo mundo("Agonia")."<br>";
echo mundo("Alegria")."<br>";
echo mundo("Proparoxitona")."<br>";
echo mundo();//se não inserido o valor da variavel continuara sendo o mesmo

?>