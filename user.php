<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 7 exercice 4</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 7 exercice 4</h1>
                    <h3 align="center">Exercice 4</h3>
                    <p align="center">Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.</p>
                </div>
            </div>
            <p align="center"><a href="index.php">Retour sur la page index.php</a></p>
            <?php
            if (isset($_POST['Nom']) AND isset($_POST['Prenom'])) { // On teste si les paramètres nom et prénom sont bien présent et si oui, on les affiche en echo ci-dessous
                echo '<p align="center">Ton nom est: "<b>' . $_POST['Nom'] . '</b>"  et ton prénom est: "<b>' . $_POST['Prenom'] . '</b>".</p>';
            } else { // s'il nous manque un paramètre, on affiche l'echo ci-dessous
                echo '<p align="center">Désolé, il manque un paramètre !</p>';
            }
            ?>
        </div>
    </body>
</html>