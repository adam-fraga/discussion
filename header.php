<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <link rel="stylesheet" href="style/bootstrap.css"
    <link rel="stylesheet" href="style/header-footer.css"
</head>
<body>
<header class="header">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">SOO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="discussion.php">Discussion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="inscription.php">Inscription</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profil.php">Modifier mes informations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link connexion" href="connexion.php">Connexion</a>
            </li>
        </ul>
    </div>
    <form method="post" action="header.php">
        <button type="submit" class="btn btn-outline-danger" name="logout">Deconnexion</button>
    </form>
    <!--DECONNEXION-->
    <?php if (isset($_POST['logout'])) {session_destroy(); header("location: connexion.php");}?>
</nav>
</header>
</body>
</html>