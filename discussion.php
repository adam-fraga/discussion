<?php
require 'config/db.php';
session_start();
//Redirige vers connexion si conon connecté
if (!$_SESSION['user']['connected'] == true) {
    header("location: connexion.php");
}
$message_send = false;
//Si action boutton
if (isset($_POST['submit']) && !empty($_POST['message'])):
//    Stock message dans variable
    $user_message = htmlspecialchars($_POST['message']);
//    stock id user dans variable
    $user_id = $_SESSION['user']['id_user'];
//Prepa variable insert DB
    $insert_message = "INSERT INTO messages( `message`, `id_utilisateur`, `date` ) VALUES ('$user_message','$user_id', NOW())";
//    Execut Request insert message dans DB
    $result_query = mysqli_query($discussion, $insert_message);
endif;
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="style/bootstrap.css"
</head>
<body>
<!--Inclusion header-->
<?php require 'header.php'; ?>

<?php
//Prepa requete selection données sur table multiple
$prepare_message = "SELECT login, message, date
FROM utilisateurs 
INNER JOIN messages 
ON utilisateurs.id = messages.id_utilisateur
ORDER BY date DESC ";
//Execute request
$put_message_query = mysqli_query($discussion,$prepare_message);
//Query recup message data from DB
$put_message = mysqli_fetch_all($put_message_query,MYSQLI_ASSOC);
?>

<div class="container mx-auto">
    <?php foreach ($put_message as $user_put_message): ?>
    <blockquote class="container border border-info col-6 mx-auto my-5 p-3 rounded">
        <p class="font-weight-bold "><?php echo $user_put_message['login'] ?></p>
        <small class="mr-6 text-info">Publié le: <?php echo $user_put_message['date'] ?></small>
        <hr>
        <p class="font-italic"> <?php echo $date_put_message = $user_put_message['message'] ; ?></p>
        </blockquote>
    <?php endforeach; ?>
</div>

<form action="discussion.php" method="post" class="text-center col-4 mx-auto my-5">
    <fieldset>
        <legend class="font-weight-bold text-info">Ton message</legend>
        </div>
        <div class="form-group col-8 mx-auto ">
            <label for="exampleInputLogin">Ton identifiant</label>
            <input type="text" class="text-center form-control" id="exampleInputLogin" aria-describedby="loginHelp"
                   value="<?php echo $_SESSION['user']['login']; ?>">
        </div>
        <!--TEXT AREA-->
        <div class="form-group">
            <label for="exampleTextarea">Ton message</label>
            <textarea class="form-control" id="exampleTextarea" rows="3" required name="message"></textarea>
        </div>
        <button type="submit" class="btn btn-info" name="submit">Envoyer</button>
    </fieldset>
</form>

<!--Inclusion footer-->
<?php require 'footer.php'; ?>
</body>
</html>

