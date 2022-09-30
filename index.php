<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="js/ajax.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>AJAX</h1>
        <p>Compteur : <span id="compteur"></span></p>
        <form method="post" action="">
            <div class="form-group">
                <label for="">Pseudo</label>
                <input type="text" class="form-control" name="pseudo">
            </div>

            <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input type="password" class="form-control" name="mdp">
            </div>

            <button class="btn btn-primary mt-2">Enregistrer</button>
            <button class="btn btn-secondary mt-2" type="button" id="bouton">Version jQuery</button>
        </form>

        <div class="alert" id="message"></div>

    </div>


</body>

</html>