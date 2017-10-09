<form>
    <input type="text" name="nome">
    <input type="number" name="idade">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">
</form>

<?php
if(isset($_GET)){
    foreach ($_GET as $captura => $organiza){
        echo "Captura: ".$captura."<br>";
        echo "Valor: ".$organiza."<br><hr><br>";
    }
    
    
}


?>