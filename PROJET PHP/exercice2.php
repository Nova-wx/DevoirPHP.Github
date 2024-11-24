<?php
$employes = [
    "Alice" => ["poste" => "Développeur", "salaire" => 4000],
    "Bob" => ["poste" => "Designer", "salaire" => 3500],
    // Ajouter les autres employés...
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomRecherche = $_POST["nom"];
    if (isset($employes[$nomRecherche])) {
        echo "Nom : $nomRecherche<br>";
        echo "Poste : " . $employes[$nomRecherche]["poste"] . "<br>";
        echo "Salaire : " . $employes[$nomRecherche]["salaire"] . "<br>";
    } else {
        echo "Employé non trouvé.";
    }
}
?>
<form method="post">
    Nom de l'employé : <input type="text" name="nom">
    <input type="submit" value="Rechercher">
</form>
