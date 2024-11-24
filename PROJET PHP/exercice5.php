<?php
session_start();
if (!isset($_SESSION['commentaires'])) {
    $_SESSION['commentaires'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $commentaire = $_POST["commentaire"];
    $_SESSION['commentaires'][] = ["texte" => $commentaire, "horodatage" => date("Y-m-d H:i:s")];
}

foreach ($_SESSION['commentaires'] as $com) {
    echo $com["horodatage"] . " : " . $com["texte"] . "<br>";
}
?>
<form method="post">
    Commentaire : <textarea name="commentaire"></textarea>
    <input type="submit" value="Soumettre">
</form>
