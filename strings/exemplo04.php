<?php

$inspiracao = "Eu sou aquele que desvenda os caminhos da lei. Eu sou a ave.";
$selecionada="aquele";
$q = strpos($inspiracao, $selecionada);
var_dump($q);

$final=substr($inspiracao,$q + strlen($selecionada),strlen($inspiracao));
echo $final;




?>