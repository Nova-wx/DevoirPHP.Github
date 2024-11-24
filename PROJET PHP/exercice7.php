<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["csv_file"])) {
    $file = fopen($_FILES["csv_file"]["tmp_name"], "r");
    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Prix</th><th>Quantité</th></tr>";
    
    while (($data = fgetcsv($file)) !== FALSE) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($data[0]) . "</td>";
        echo "<td>" . htmlspecialchars($data[1]) . "</td>";
        echo "<td>" . htmlspecialchars($data[2]) . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    fclose($file);
}
?>
<form method="post" enctype="multipart/form-data">
    Importer un fichier CSV : <input type="file" name="csv_file">
    <input type="submit" value="Télécharger">
</form>
