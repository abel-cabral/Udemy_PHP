<?php
$pessoas = array();
$json = '[{"nome":"Abel","idade":25,"sexo":"Masculino"},{"nome":"Arnaldo","idade":48,"sexo":"Masculino"}]';
$conversor = json_decode($json, true);

var_dump($conversor);

?>

