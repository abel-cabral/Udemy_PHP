<?php
$pessoa = array(
    'nome ' => 'Abel Cabral',
    'Signo ' => 'Cancer',
    'Telefone ' => 969369662 
);
foreach($pessoa as $key => &$value){//foreach serve para exibir os dados de um array, bidimensional
    if(gettype($value) === 'integer') $value = 83555401;
    echo $key.$value."<br>";
}
print_r($pessoa);//serve pra exibir a construção do array;
?>