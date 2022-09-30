<?php

/* Afficher un formulaire pour que l'utilisateur puisse taper
    un nombre entre 1 et 10.
    Quand il aura cliqué sur le bouton "Tester", vous devez comparer
    en ajax, le nombre qu'il a taper avec le nombre généré par le fichier
    alea.php.
    Si les nombres sont identiques, vous affichez "Bravo, tu as deviné"
    Sinon affichez "Essaye encore"
*/

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="../js/exo.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <form method="post" action="">
            <div class="form-group">
                <label for="">Veuillez saisir un nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
        </form>

        <button class="btn btn-primary mt-2" id="submit">Tester</button>
    </div>

    <div class="alert" id="message"></div>

</html>
</body>