<?php
require 'config/db.php';
session_start();
if (isset($_SESSION['user'])) {
    $_SESSION['user']['connected'] = true;
} else {
    header("location: connexion.php");
}
//Variables
$user_login = NULL;
$user_password = NULL;
$wrongPass = NULL;
$wrongLogin = NULL;

$pull_data = "SELECT * FROM utilisateurs";

$query = mysqli_query($discussion, $pull_data);
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);

//Si action utilisateur sur boutton
if (isset($_POST['submit'])) {
//    Boucle parourt DB
    foreach ($data as $value) {
//        Verifie si login existe dans DB
        if ($_SESSION['user']['login'] == $value['login']) {
//            Compare 2 password entré par user
            if (htmlspecialchars($_POST['password']) == htmlspecialchars($_POST['confpassword'])) {
//                Verifie qu'user est bien connecté
                if ($_SESSION['user']['connected'] == true) {
//                    Recup saisit user dans variable
                    $old_user_login = $_SESSION['user']['login'];
                    $user_login = htmlspecialchars($_POST['login']);
                    $user_password = password_hash($_POST['password'], CRYPT_BLOWFISH);
//                 Prepare requete
                    $update_data = "UPDATE utilisateurs SET login = '$user_login', password = '$user_password' WHERE login = '$old_user_login'";
//                    Execute requete
                    mysqli_query($discussion, $update_data);
                }
            } else {
                $wrongPass = true;
            }
        } else {
            $wrongLogin = true;
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
    <title>Profil</title>
    <link rel="stylesheet" href="style/bootstrap.css"
<body>
<!--Inclusion header-->
<?php require 'header.php'; ?>
<!--JUMBOTRON-->
<div class="jumbotron text-center">
    <h1 class="display-3 text-info">Tu souhaites modifier tes infos?</h1>
    <p class="lead">Tu trouve ton login depassé ou bien tu souhaites changer ton mot de passe? N'hésite pas à remplir le
        Formulaire de modification ci dessous!</p>
    <hr class="my-4">
</div>
<!--Formulaire-->
<form action="profil.php" method="post" class="col-3 text-center  mx-auto my-5">
    <fieldset>
        <legend class="font-weight-bolder text-info">Formulaire de modification</legend>
        <div class="form-group row">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nouveau Login</label>
            <input type="text" class="text-center form-control" id="exampleInputLogin" aria-describedby="emailLogin"
                   name="login" required placeholder="Saisissez votre identifiant">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Nouveau mot de passe</label>
            <input type="password" class="text-center form-control" id="exampleInputPassword1"
                   name="password" required placeholder="Saisissez votre mot de passe">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirmation du mot de passe</label>
            <input type="password" class="text-center form-control" id="exampleInputPassword2"
                   name="confpassword" required placeholder="Confirmez votre mot de passe">
            <small id="emailHelp" class="form-text  text-warning">Ne communiquez jamais votre mot de passe!</small>
        </div>
        <button type="submit" class="btn btn-info" name="submit">Valider</button>
    </fieldset>
</form>
<!--Inclusion footer-->
<?php require 'footer.php'; ?>
</body>
</html>

