<?php
$utilisateurs = [
    ["email" => "test@example.com", "mot_de_passe" => "1234"],
    ["email" => "user@example.com", "mot_de_passe" => "abcd"],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $mdp = $_POST["mot_de_passe"];
    $trouve = false;

    foreach ($utilisateurs as $utilisateur) {
        if ($utilisateur["email"] == $email && $utilisateur["mot_de_passe"] == $mdp) {
            $trouve = true;
            break;
        }
    }
    
    echo $trouve ? "Connexion réussie." : "Échec de la connexion.";
}
?>
<form method="post">
    Email : <input type="email" name="email"><br>
    Mot de passe : <input type="password" name="mot_de_passe"><br>
    <input type="submit" value="Se connecter">
</form>
