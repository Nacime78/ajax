<?php

if( $_POST ){ // si $_POST n'est pas vide
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];

    $pdo = new PDO('mysql:host=localhost; dbname=boutique2', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']); 

    $pdoStatement = $pdo->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");
    $pdoStatement->bindValue(":pseudo", $pseudo);
    $pdoStatement->execute();

        if( $pdoStatement->rowCount() ){
            $membre = $pdoStatement->fetch(PDO::FETCH_ASSOC);
            if( password_verify($mdp, $membre['mdp']) ){
            $message = "Bonjour " . $membre['pseudo'] . ", vous êtes connectés";
        }else{
            $message = "Erreur mot de passe";
        }
    }else{
        $message = "Erreur pseudo";
    }

    echo $message;
}