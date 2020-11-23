<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="style/bootstrap.css"
    <link rel="stylesheet" href="style/global.css"
    <link rel="stylesheet" href="style/discussion.css"


</head>
<body>
<!--Inclusion header-->
<?php require 'header.php'; ?>
<!--Formulaire-->
<form class="text-center col-4 mx-auto my-5">
    <fieldset>
        <legend class="font-weight-bold text-info">Fil d'actualité</legend>
        </div>
        <div class="form-group col-8 mx-auto ">
            <label for="exampleInputEmail1">Ton identifiant</label>
            <input type="email" class="text-center form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
<!--TEXT AREA-->
        <div class="form-group">
            <label for="exampleTextarea">Ton message</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
        </div>
    </fieldset>
</form>
<!--Inclusion footer-->
<?php require 'footer.php'; ?>
</body>
</html>

