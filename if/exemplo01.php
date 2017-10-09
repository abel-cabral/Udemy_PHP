<?php
$qualasuaidade = 126;

$idade = 12;
$idademaior = 18;
$melhoridade = 65;

if($qualasuaidade < $idade){
    echo "Criança";
} else if($qualasuaidade < $idademaior){
    echo "Adolescente";
} else if($qualasuaidade < $melhoridade){
    echo "Adulto";
} else if($qualasuaidade < 150){
    echo "Idoso";
} else {
    echo "Imortal";
}
echo "<br>";

echo ($qualasuaidade < 150)?"Imortal":"Gente Velha";


?>