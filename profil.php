<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <link rel="stylesheet" href="style/bootstrap.css"
    <link rel="stylesheet" href="style/global.css"
    <link rel="stylesheet" href="style/profil.css"
</head>
<body>
<!--Inclusion header-->
<?php require 'header.php'; ?>
<!--JUMBOTRON-->
<div class="jumbotron text-center">
    <h1 class="display-3 text-info">Tu souhaites modifier tes infos?</h1>
    <p class="lead">Tu trouve ton login depassé ou bien tu souhaites changer ton mot de passe? N'hésite pas à remplir le Formulaire de modification ci dessous!</p>
    <hr class="my-4">
</div>
<!--Formulaire-->
<form class="col-3 text-center  mx-auto my-5">
    <fieldset>
        <legend>Formulaire de modification</legend>
        <div class="form-group row">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nouveau identifiant</label>
            <input type="text" class="text-center form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Saisissez votre identifiant">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nouveau mot de passe</label>
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

