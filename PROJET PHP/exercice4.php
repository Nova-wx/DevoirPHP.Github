<?php
$panier = [
    ["nom" => "Produit A", "quantite" => 2, "prix" => 10],
    ["nom" => "Produit B", "quantite" => 1, "prix" => 20],
];

$total = 0;
foreach ($panier as $produit) {
    $total += $produit["quantite"] * $produit["prix"];
}
echo "Total du panier : " . $total . " €";
?>
