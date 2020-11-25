<?php
require'config/db.php';
session_start();
$_SESSION['user']['connected'] = false;

//initialise request
$preparePullQuery = "SELECT * FROM utilisateurs WHERE 1";
//Execut request
$query = mysqli_query($discussion, $preparePullQuery);
//Pull data from DB
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
//Decrypt password

if (isset($_POST['connexion'])) {
    foreach ($data as $value) {
        if (!empty(htmlspecialchars($_POST['login'])) == $value['login']) {
            {
                $pass = $value['password'];
                if (password_verify($_POST['password'], $pass) == true) {
                    $_SESSION['user'] = $_POST;
                    $_SESSION['user']['connected'] = true;
                }
            }
        }
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <link rel="stylesheet" href="style/bootstrap.css"
</head>
<body>
<!--Inclusion header-->
<?php require 'header.php'; ?>
<!--JUMBOTRON-->
<div class="jumbotron text-center ">
    <h1 class="display-3 text-info ">Connecte toi vite!</h1>
    <p class="lead">Tes collègues n'attendent plus que toi pour pouvoir partager leurs idées et leur projets. Alors
        connecte
        toi en remplissant le formulaire ci dessous et rejoins vite le fil de Discussion!</p>

</div>
<!--Formulaire-->
<form action="connexion.php" method="post" class="col-3 text-center  mx-auto my-5">
    <fieldset>
        <legend>Formulaire de connexion</legend>
        <div class="form-group row">
        </div>
        <div class="form-group">
            <label for="exampleInputLogin">Identifiant</label>
            <input name="login" type="text" class="text-center form-control" id="exampleInputLogin"
                   aria-describedby="loginHelp"
                   placeholder="Saisissez votre identifiant">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="text-center form-control" id="exampleInputPassword1"
                   name="password" placeholder="Saisissez votre mot de passe">
        </div>
        <button type="submit" class="btn btn-info" name="connexion">Connexion</button>
    </fieldset>
</form>
<!--Inclusion footer-->
<?php require 'footer.php'; ?>
</body>
</html>
