<?php
$produits = [
    "Produit A" => 10,
    "Produit B" => 20,
    "Produit C" => 15,
];

$total = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["produits"])) {
    $selection = $_POST["produits"];
    echo "Produits sélectionnés : <br>";
    foreach ($selection as $produit) {
        echo $produit . " - " . $produits[$produit] . "€<br>";
        $total += $produits[$produit];
    }
    echo "Prix total : " . $total . "€";
}
?>
<form method="post">
    <?php foreach ($produits as $nom => $prix) : ?>
        <input type="checkbox" name="produits[]" value="<?= $nom ?>"> <?= $nom ?> (<?= $prix ?>€)<br>
    <?php endforeach; ?>
    <input type="submit" value="Soumettre">
</form>
