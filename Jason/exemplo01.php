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

  echo json_encode($pessoas);

?>