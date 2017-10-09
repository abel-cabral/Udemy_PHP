<?php
$pessoas = array();

array_push($pessoas, array(
        'nome'=>'Abel',
        'idade'=>25,
        'sexo'=>'Masculino'));
array_push($pessoas, array(
        'nome'=>'Arnaldo',
        'idade'=>48,
        'sexo'=>'Masculino'));

    print_r($pessoas);
    print_r ($pessoas[0]['nome']);

?>