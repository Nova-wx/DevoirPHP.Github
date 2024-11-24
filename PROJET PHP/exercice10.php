<?php
session_start();

if (!isset($_SESSION['utilisateurs'])) {
    $_SESSION['utilisateurs'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"];
    $nom = $_POST["nom"];

    if ($action == "Ajouter") {
        $_SESSION['utilisateurs'][] = $nom;
    } elseif ($action == "Supprimer") {
        $index = array_search($nom, $_SESSION['utilisateurs']);
        if ($index !== false) {
            unset($_SESSION['utilisateurs'][$index]);
        }
    }
}

echo "Utilisateurs enregistrés : <br>";
foreach ($_SESSION['utilisateurs'] as $user) {
    echo htmlspecialchars($user) . "<br>";
}
?>
<form method="post">
    Nom : <input type="text" name="nom">
    <input type="submit" name="action" value="Ajouter">
    <input type="submit" name="action" value="Supprimer">
</form>
