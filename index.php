<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice7</title>
    </head>
    <body>
        <?php
        //On masque le formulaire après l'envoi des données
        if (empty($_GET)) {
            ?>
            <!--Création d'un formulaire qui redirige vers la même page avec la méthode GET-->
            <form action="index.php" method="GET">
                <select name="civility">
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mme</option>
                </select>
                <p><label for="firstName">Prénom :</label><input type="text" name="firstName" id="firstName" /></p>
                <p><label for="lastName">Nom :</label><input type="text" name="lastName" id="lastName" /></p>
                <p><label for="file">Fichier :</label><input type="file" name="file" id="file" /></p>
                <input type="submit" />
            </form>
            <?php
        } else {
            //On vérifie si les parmètres existent et on écrit leurs valeurs
            if (isset($_GET['civility']) && isset($_GET['firstName']) && isset($_GET['lastName'])) {
                echo $_GET['civility'] . ' ' . $_GET['firstName'] . ' ' . $_GET['lastName'];
            }
            ?>
            <P>
                <?php
                //On vérifie que le paramètre existe et on affiche le nom du fichier et son extension
                if (isset($_GET['file'])) {
                    echo pathinfo($_GET['file'], PATHINFO_FILENAME) . ' ' . pathinfo($_GET['file'], PATHINFO_EXTENSION);
                }
            }
            ?>
        </p>
    </body>
</html>
