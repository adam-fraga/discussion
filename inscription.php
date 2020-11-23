<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inscription</title>
    <link rel="stylesheet" href="style/bootstrap.css"
    <link rel="stylesheet" href="style/global.css"
    <link rel="stylesheet" href="inscription.php"
</head>
<body>
<!--Inclusion header-->
<?php require 'header.php'; ?>
<!--JUMBOTRON-->
<div class="jumbotron text-center">
    <h1 class="display-3 text-info">Rejoins SOO!</h1>
    <p class="lead">Tu souhaites rejoindre la communauté "SOO" , rien de plus simple remplis le formulaire ci dessous!</p>
    <hr class="my-4">
</div>
<!--Formulaire-->
<form class="col-3 text-center  mx-auto my-5">
    <fieldset>
        <legend class="font-weight-bolder text-info">Formulaire d'inscription</legend>
        <div class="form-group row">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Identifiant</label>
            <input type="text" class="text-center form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Saisissez votre identifiant">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="text-center form-control" id="exampleInputPassword1"
                   placeholder="Saisissez votre mot de passe">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirmation du mot de passe</label>
            <input type="password" class="text-center form-control" id="exampleInputPassword1"
                   placeholder="Confirmez votre mot de passe">
            <small id="emailHelp" class="form-text  text-warning">Ne communiquez jamais votre mot de passe!</small>
        </div>
        <button type="button" class="btn btn-info" name="inscription">Valider</button>
    </fieldset>
</form>
<!--Inclusion footer-->
<?php require 'footer.php'; ?>
</body>
</html>

