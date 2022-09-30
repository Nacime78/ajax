<?php

if ($_POST) {
    $pseudo = $_POST["pseudo"];
    $mdp = $_POST["mdp"];

    $pdo = new PDO('mysql:host=localhost; dbname=boutique2', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);

    $pdoStatement = $pdo->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");
    $pdoStatement->bindValue(":pseudo", $pseudo);
    $pdoStatement->execute();

    if ($pdoStatement->rowCount()) {
        $membre = $pdoStatement->fetch(PDO::FETCH_OBJ);

        if (password_verify($mdp, $membre->mdp)) {
            $message = "Bonjour " . $membre->pseudo . ", vous êtes connectés";
        } else {
            $message = "Erreur mot de passe";
        }
    } else {
        $message = "Erreur pseudo";
    }

    $resultat = new stdClass;
    $resultat->membre = $membre ?? null;
    $resultat->message = $message;
    echo json_encode($resultat);
    // json_encode envoie le résultat en JSON, decode renvoi le résultat en HTML
}

