<?php

if( !empty($_GET['a']) && !empty($_GET['b']) ){
    $result = $_GET['a'] + $_GET['b'];
    echo $result ;
}else{
    echo "Erreur";
}

?>