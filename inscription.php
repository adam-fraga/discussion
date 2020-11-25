<?php
//LINK DB
require 'config/db.php';
//Demarrage Session
session_start();
//Variables
$wrongpass = NULL;
$toolong = NULL;
$emptylogin = NULL;
//Controle action boutton
if (isset($_POST['subscribe'])) {
//    Controle de la longueur du login
    if (strlen($_POST['login']) < 50) {
//        Controle que le login soit bien saisit
        if (!empty($_POST['login'])) {
//            Controle que les mot de passes match entre eux et soit bien saisit
            if (!empty($_POST['password']) == htmlspecialchars($_POST['confpassword'])) {
                $user_login = htmlspecialchars($_POST['login']);
                $user_pass = password_hash($_POST['password'],CRYPT_BLOWFISH);
                $prepare_query = "INSERT INTO `utilisateurs` (login , password) VALUES ('$user_login','$user_pass')";
//                Execute requête d'insertion DB
                $subscribe_query = mysqli_query($discussion, $prepare_query);
//                REDIRIGE VERS PAGE DE CONNEXION
                header("location: connexion.php");
            } else {
                $wrongpass = true;
            }
        } else {
            $emptylogin = true;
        }
    } else {
        $toolong = true;
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
    <title>inscription</title>
    <link rel="stylesheet" href="style/bootstrap.css"
</head>
<body>
<!--Inclusion header-->
<?php require 'header.php'; ?>
<!--JUMBOTRON-->
<div class="jumbotron text-center">
    <h1 class="display-3 text-info">Rejoins SOO!</h1>
    <p class="lead">Tu souhaites rejoindre la communauté "SOO" , rien de plus simple remplis le formulaire ci
        dessous!</p>
    <hr class="my-4">
</div>
<!--Formulaire-->
<form method="post" action="inscription.php" class="col-3 text-center  mx-auto my-5">
    <fieldset>
        <legend class="font-weight-bolder text-info">Formulaire d'inscription</legend>
        <div class="form-group row">

        </div>
        <div class="form-group">
            <label for="exampleInputLogin">Identifiant</label>
            <input required type="text" class="text-center form-control" id="exampleInputLogin"
                   aria-describedby="emailHelp"
                   placeholder="Saisissez votre identifiant" name="login">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input required type="password" class="text-center form-control" id="exampleInputPassword1"
                   placeholder="Saisissez votre mot de passe" name="password">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword2">Confirmation du mot de passe</label>
            <input required type="password" class="text-center form-control" id="exampleInputPassword2"
                   placeholder="Confirmez votre mot de passe" name="confpassword">
            <small id="emailHelp" class="form-text  text-warning">Ne communiquez jamais votre mot de passe!</small>
        </div>
        <button type="submit" class="btn btn-info" name="subscribe">Valider</button>
        <?php if ($wrongpass == true) {
            echo '<div class="fail_report">' . "Vos mots de passes ne correspondent pas." . '</div>';
        } elseif ($toolong == true) {
            echo '<div class="fail_report">' . "Votre login est beaucoup trop long!" . '</div>';
        } elseif ($emptylogin == true) {
            echo '<div class="fail_report">' . "Vos mots de passes ne correspondent pas." . '</div>';
        } ?>

    </fieldset>
</form>
<!--Inclusion footer-->
<?php require 'footer.php'; ?>
</body>
</html>

