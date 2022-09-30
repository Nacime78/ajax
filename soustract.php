<?php

if( !empty($_POST['c']) && !empty($_POST['d']) ){
    $result = $_POST['c'] - $_POST['d'];
    echo $result ;
}else{
    echo "Erreur";
}

?>