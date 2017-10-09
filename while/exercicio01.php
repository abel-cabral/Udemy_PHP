<?php
    $roleta=true;
    while($roleta){
        $numero=rand(1,100);
        if($numero === 25){
            echo "Queria Estar Morta. ";
            break;
        }
        echo $roleta." ";        
    }
    
?>