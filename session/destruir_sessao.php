<?php
require_once("config.php");
session_unset('nome');//Encerra a Sessao, se nao especificado a variavel fecha todos abertos na sessao, nao é o caso.
session_destroy(); //A diferença deste para o unset é que este faz como se vc nunca tivesse acessado o site, o de cima deixa deixa rastros de navegação.



?>