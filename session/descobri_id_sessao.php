<?php
require_once("config.php");//chama o arquivo e evita repetição das informações.

echo session_id();//Exibe o id da sua sessao, cada id é unico. Não se repete pois é o que identifica sua ligaçao com o servidor
session_regenerate_id();//Gera um novo ID para o usuário.
echo "<br>";
var_dump($_SESSION);//Vizualizar o array super global da sessao.

echo "<br>";
echo session_cache_expire()."<br>";//Retorna o prazo do cache atual
echo session_save_path()."<br>";//Obtém e/ou define o caminho para armazenamento da sessão atual

switch(session_status()){    
    case PHP_SESSION_DISABLED;
    echo "PHP_SESSION_DISABLED se as sessões estiverem desabilitadas.";
    break;
    
    case PHP_SESSION_NONE;
    echo "PHP_SESSION_NONE se as sessões estiverem habilitadas, mas nenhuma existir.";
    break;
    
    case PHP_SESSION_ACTIVE;
    echo "PHP_SESSION_ACTIVE se as sessões estiverem habilitadas, e uma existir.";
    break;
    
}

?>